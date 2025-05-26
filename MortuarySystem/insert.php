
<?php
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
 $trn_date = date("Y/m/d H:i:s");
 $name =$_REQUEST['name'];
 $heirs_name =$_REQUEST['heirs_name'];
 $grave_lot =$_REQUEST['grave_lot'];
 $heirs_identity_card =$_REQUEST['heirs_identity_card'];
 $date_of_death =$_REQUEST['date_of_death'];
 $cause_of_death =$_REQUEST['cause_of_death'];
 $address = $_REQUEST['address'];
 $phone = $_REQUEST['phone'];
 $date = $_REQUEST['date'];
 $time = $_REQUEST['time'];
  
 $submittedby = $_SESSION["username"];
 $ins_query="insert into new_record
 (trn_date, name, heirs_name, grave_lot,heirs_identity_card, date_of_death, cause_of_death, address, phone, submittedby,date, time )VALUES ('$trn_date','$name','$heirs_name','$grave_lot','$heirs_identity_card','$date_of_death','$cause_of_death','$address','$phone','$submittedby','$date','$time')";
 
 mysqli_query($con,$ins_query) or die(mysql_error());
 $status = "Your data has been record.
 </br></br><a href='view.php'>View Detail</a>";
}
?>


<html>
<head>
<title>INSERT</title>
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
    <li><a class="active" href="index.php">Home</a></li>
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
<div align="center">
<h1>INSERT BOOKING</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1">
<p><input type="text" name="name" placeholder="Enter The Name Who Died" required></p>
<p><input type="text" name="heirs_name" placeholder="Enter Heirs Name" required></p>
<p><input type="text" name="grave_lot" placeholder="Enter Grave Lot" required></p>
<p><input type="text" name="heirs_identity_card" placeholder="Enter Heirs Identity Card" required></p>
<p><input type="text" name="date_of_death" placeholder="Enter Date Of Death" required></p>
<p><input type="text" name="cause_of_death" placeholder="Enter Cause Of Death" required></p>
<p><input type="text" name="address" placeholder="Enter address" required></p>
<p><input type="text" name="phone" placeholder="Enter phone" required></p>
<p><input type="date" name="date" placeholder="Enter date" required></p>
<p><input type="time" name="time" placeholder="Enter time" required></p>

<p><input name="submit" type="submit" value="INSERT"></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>