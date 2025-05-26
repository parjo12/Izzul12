
<?php
require('db.php');
include("auth.php");

$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<title>UPDATE</title>
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

.form {
        background-color: rgba(255, 255, 255, 0.8); /* Transparent white background color */
        padding: 40px; /* Add some padding for spacing */
        border-radius: 10px; /* Add border radius for a rounded look */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a slight shadow for depth */
        width: 300px; /* Set form width */
    }
    
</style>
</head>

<body>

<br><br>
    
<center>
<ul>
    <li><a class="active" href="index.php">HOME</a></li>
  <li><<a href="about.php"> ABOUT </a></li>
  <li><a href="booking.php"> BOOKING </a></li>
  <li><a href="gallery.php"> GALLERY </a></li>
  <li><a href="contact.php"> CONTACT </a></li>
  <div align="right">    
<a href="logout.php">LOGOUT</a>
</div>
</ul>  
</center>
<br><br>
<div class="form">
<h1 align="center">UPDATE RECORD</h1>
<?php

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$heirs_name =$_REQUEST['heirs_name'];
$grave_lot =$_REQUEST['grave_lot'];
$heirs_identity_card =$_REQUEST['heirs_identity_card'];
$date_of_death =$_REQUEST['date_of_death'];
$cause_of_death =$_REQUEST['cause_of_death'];
$address =$_REQUEST['address'];
$phone =$_REQUEST['phone'];
$date =$_REQUEST['date'];
$time =$_REQUEST['time'];
$submittedby = $_SESSION["username"];

$update="update new_record set trn_date='".$trn_date."',name='".$name."',heirs_name='".$heirs_name."', grave_lot='".$grave_lot."', heirs_identity_card='".$heirs_identity_card."', date_of_death='".$date_of_death."',cause_of_death='".$cause_of_death."', address='".$address."',phone='".$phone."',date='".$date."',time='".$time."',submittedby='".$submittedby."' where id='".$id."'";


mysqli_query($con, $update) or die(mysqli_error());
$status = "<center>Your data has been update. </br></br>
<a href='view.php'>View Detail</a><center>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else 
{
?>

<div align="center">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1">
<input name="id" type="hidden" value="<?php echo $row['id'];?>">
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>"></p>
<p><input type="text" name="heirs_name" placeholder="Enter Heirs Name" required value="<?php echo $row['heirs_name'];?>"></p>
<p><input type="text" name="grave_lot" placeholder="Enter Grave Lot" required value="<?php echo $row['grave_lot'];?>"></p>
<p><input type="text" name="heirs_identity_card" placeholder="Enter Heirs Identity Card" required value="<?php echo $row['heirs_identity_card'];?>"></p>
<p><input type="text" name="date_of_death" placeholder="Enter Date Of Death" required value="<?php echo $row['date_of_death'];?>"></p>
<p><input type="text" name="cause_of_death" placeholder="Enter Cause Of Death" required value="<?php echo $row['cause_of_death'];?>"></p>
<p><input type="text" name="address" placeholder="Enter Address" required value="<?php echo $row['address'];?>"></p>
<p><input type="text" name="phone" placeholder="Enter Phone" required value="<?php echo $row['phone'];?>"></p>
<p><input type="date" name="date" placeholder="Enter Date" required value="<?php echo $row['date'];?>"></p>
<p><input type="time" name="time" placeholder="Enter Time" required value="<?php echo $row['time'];?>"></p>

<p><input name="submit" type="submit" value="UPDATE"></p>
</form>
<?php 
} 
?>
</div>
</div>
</body>
</html>