from flask import Flask, jsonify
import requests
import mysql.connector
from datetime import datetime
import schedule
import time
import threading

app = Flask(__name__)

# === CONFIGURATION ===
LATITUDE = "3.139"
LONGITUDE = "101.6869"
TIMEZONE = "Asia/Kuala_Lumpur"

MYSQL_CONFIG = {
    "host": "localhost",
    "user": "root",               # <-- tukar kalau user kau lain
    "password": "",              # <-- letak password MySQL kau, kalau tiada biar kosong
    "database": "weather_iot"
}

FORECAST_URL = f"https://api.open-meteo.com/v1/forecast?latitude={LATITUDE}&longitude={LONGITUDE}&hourly=temperature_2m,wind_speed_10m&timezone={TIMEZONE}"
CURRENT_URL = f"https://api.open-meteo.com/v1/forecast?latitude={LATITUDE}&longitude={LONGITUDE}&current=temperature_2m,wind_speed_10m&timezone={TIMEZONE}"

def get_connection():
    return mysql.connector.connect(**MYSQL_CONFIG)

def fetch_and_store():
    forecast_res = requests.get(FORECAST_URL).json()
    current_res = requests.get(CURRENT_URL).json()

    now = datetime.now().replace(minute=0, second=0, microsecond=0)
    hour_str = now.strftime("%Y-%m-%dT%H:00")
    timestamp = now.strftime("%Y-%m-%d %H:%M:%S")

    try:
        hour_index = forecast_res['hourly']['time'].index(hour_str)
        temp_forecast = forecast_res['hourly']['temperature_2m'][hour_index]
        wind_forecast = forecast_res['hourly']['wind_speed_10m'][hour_index]

        temp_actual = current_res['current']['temperature_2m']
        wind_actual = current_res['current']['wind_speed_10m']

        temp_mse = (temp_actual - temp_forecast) ** 2
        wind_mse = (wind_actual - wind_forecast) ** 2

        conn = get_connection()
        c = conn.cursor()
        c.execute('''INSERT INTO weather (timestamp, temp_forecast, temp_actual, wind_forecast, wind_actual, temp_mse, wind_mse)
                     VALUES (%s, %s, %s, %s, %s, %s, %s)''',
                  (timestamp, temp_forecast, temp_actual, wind_forecast, wind_actual, temp_mse, wind_mse))
        conn.commit()
        conn.close()

        print(f"[INFO] Data stored at {timestamp}")
    except Exception as e:
        print(f"[ERROR] Data fetch/store failed: {e}")

@app.route("/data", methods=["GET"])
def get_all_data():
    conn = get_connection()
    c = conn.cursor()
    c.execute("SELECT * FROM weather")
    rows = c.fetchall()
    conn.close()
    return jsonify(rows)

def run_scheduler():
    #schedule.every().hour.at(":00").do(fetch_and_store)
    schedule.every(1).minutes.do(fetch_and_store)

    while True:
        schedule.run_pending()
        time.sleep(1)

if __name__ == '__main__':
    threading.Thread(target=run_scheduler).start()
    app.run(debug=True, port=5001)
