
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> SEARCH </title>
<link rel="stylesheet" href="style.css">
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid #0067ab;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #0067ab;
  color: white;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

body {
  background-image: url('image/gambar18.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>

<body>

<br><br>

<center>
<ul>
    <li><a class="active" href="indexadmin.php">HOME</a></li>
  <li><<a href="bookingadmin.php"> BOOKING </a></li>
  <li><a href="report.php"> REPORT </a></li>
  <li><a href="search.php"> SEARCH </a></li>
  <div align="right">    
<a href="logout.php">LOGOUT</a>
</div>
</ul>
</center>

<br><br>
  
<div align="center">
<form action="search.php" method="post">
<input type="text" name="name" class="form-control">
<input type="submit" value="SEARCH">
</form>
</div>

<?php
error_reporting(0);

$host="localhost";
$user= "root";
$pwd="";
$dbname="booking";
$tblname="new_record"; 

$con=mysqli_connect($host,$user,$pwd,$dbname);

if(!$con)
{die(mysqli_error($con));}

else
{echo "<br>";} 

$conn = mysqli_connect("localhost","root","","booking");

if(count($_POST)>0) {

$name=$_POST[name];
//$result = mysqli_query($conn,"SELECT * FROM new_record where name LIKE 'A%'");
$result = mysqli_query($conn,"SELECT * FROM new_record where name ='$name'");
}
?>

<br><br>
<table border=1 align="center" width="50%">
<tr align="center">
    <style>
    td {
        background-color: grey;
        color: white;
    }
</style>
<td><strong>NAME</strong></td>
<td><strong>HEIRS_NAME</strong></td>
<td><strong>GRAVE_LOT</strong></td>
<td><strong>HEIRS_IDENTITY_CARD</strong></td>
<td><strong>DATE_OF_DEATH</strong></td>
<td><strong>CAUSE_OF_DEATH</strong></td>
<td><strong>ADDRESS</strong></td>
<td><strong>PHONE</strong></td>
<td><strong>DATE</strong></td>
<td><strong>TIME</strong></td>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr align="center">
<style>
    td {
        background-color: grey;
        color: white;
    }
</style>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["heirs_name"]; ?></td>
<td><?php echo $row["grave_lot"]; ?></td>
<td><?php echo $row["heirs_identity_card"]; ?></td>
<td><?php echo $row["date_of_death"]; ?></td>
<td><?php echo $row["cause_of_death"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
</tr>
<?php
$i++; }
?>
</table>
</body>
</html>
