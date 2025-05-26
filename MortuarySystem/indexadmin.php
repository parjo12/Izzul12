
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> HOME </title>
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
<center><h2 style="border:5px solid grey; width:200px; height:40px; background-color:turquoise;">ADMIN</h2>
<div align="right"> 
<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
</div>
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

<center><h2 style="border:5px solid grey; width:800px; height:40px; background-color:turquoise;">MAKLUMAT-MAKLUMAT YANG AKAN DI UPLOAD PADA PENGGUNA</h2>
    <img src="image/sistem1.JPG" alt="Trulli" width="500" height="333">
    <br><br>
    <img src="image/kuliah22.JPG" alt="Trulli" width="500" height="333">
    <br><br>
    <img src="image/hadis2.JPG" alt="Trulli" width="500" height="333">
    <br><br>
</center>

</body>
</html>