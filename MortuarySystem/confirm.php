
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> CONFIRM BOOKING </title>
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
<div align="right">    
<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">LOGOUT</a>
</div>
<br><br>

<center>
    <ul>
<li><a class="active" href="index.php">Home</a></li>
  <li><<a href="about.php"> ABOUT </a></li>
  <li><a href="booking.php"> BOOKING </a></li>
  <li><a href="gallery.php"> GALLERY </a></li>
  <li><a href="contact.php"> CONTACT </a></li>
    </ul>

<br><br><br><br>
<h1> YOUR BOOKING IS CONFIRM ! <br><br> THANK YOU !  </h1>
</center>
</body>
</html>
