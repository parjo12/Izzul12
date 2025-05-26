
<?php
require('db.php');
include("auth.php");
?>

<html>
<head>
<title>VIEW</title>
<link rel="stylesheet" href="style.css">
<style>
    
marquee
{
    background-color: white;
    opacity:0.8;
}
 
</style>

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
    

<center><h1>VIEW BOOKING</h1></center>

<table border="1" width="60%" align="center">
<tr align="center">
    <style>
    td {
        background-color: grey;
        color: white;
    }
</style>
<td><strong>NO</strong></td>
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
<td><strong>EDIT</strong></td>
<td><strong>DELETE</strong></td>
</tr>

<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc ;";
$result = mysqli_query($con,$sel_query);

while($row = mysqli_fetch_assoc($result)) 
{
?>
<tr align="center">
<style>
    td {
        background-color: grey;
        color: white;
    }
</style>
<td><?php echo $count; ?></td>
<td align="left"><?php echo $row["name"]; ?></td>
<td align="left"><?php echo $row["heirs_name"]; ?></td>
<td align="left"><?php echo $row["grave_lot"]; ?></td>
<td align="left"><?php echo $row["heirs_identity_card"]; ?></td>
<td align="left"><?php echo $row["date_of_death"]; ?></td>
<td align="left"><?php echo $row["cause_of_death"]; ?></td>
<td align="left"><?php echo $row["address"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td><a href="editadmin.php?id=<?php echo $row["id"]; ?>">EDIT</a></td>
<td><a href="deleteadmin.php?id=<?php echo $row["id"]; ?>">DELETE</a></td>
</tr>
<?php 
$count++; 
} 
?>
</table>
</body>
</html>