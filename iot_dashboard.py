import streamlit as st
import pandas as pd
import mysql.connector
import matplotlib.pyplot as plt

# --- Database Connection ---
conn = mysql.connector.connect(
    host="localhost",
    user="root",           # <-- ubah ikut setting MySQL kau
    password="",           # <-- password MySQL (biar kosong kalau tiada)
    database="weather_iot"
)

# --- Ambil data dari database ---
df = pd.read_sql("SELECT * FROM weather ORDER BY timestamp DESC", conn)
conn.close()

# --- Tajuk Dashboard ---
st.title("🌤️ IoT Weather Dashboard")
st.write("Forecast vs Actual Comparison & MSE")

# --- Tunjuk data table ---
st.subheader("📋 Data Table")
st.dataframe(df)

# --- Graf suhu forecast vs actual ---
st.subheader("📈 Temperature: Forecast vs Actual")
plt.figure(figsize=(10,4))
plt.plot(df['timestamp'], df['temp_forecast'], label='Forecast', marker='o')
plt.plot(df['timestamp'], df['temp_actual'], label='Actual', marker='x')
plt.xticks(rotation=45)
plt.ylabel("Temperature (°C)")
plt.legend()
st.pyplot(plt)

# --- MSE Trend ---
st.subheader("📉 Temperature MSE Trend")
plt.figure(figsize=(10,4))
plt.plot(df['timestamp'], df['temp_mse'], label='Temp MSE', color='red', marker='d')
plt.xticks(rotation=45)
plt.ylabel("MSE")
st.pyplot(plt)
