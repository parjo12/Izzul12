
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> REPORT </title>
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
    
    .output {
    background-color: #f0f0f0; /* Background color */
    padding: 10px; /* Padding for spacing */
    margin: 10px 0; /* Margin for spacing between outputs */
    border-radius: 5px; /* Rounded corners for style */
 
}

.center {
    text-align: center; /* Center-align the content */
    width: 200px;
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

<center>
<div class="form-container">
<form name="form1" action="report.php" method="get">
<input name="list" type="hidden" value="0">
<input type="submit" value="REKOD MASA PENGGUNA">
</form>
</div>

<br>
<div class="form-container">   
<form name="form2" action="report.php" method="get">
<input name="list" type="hidden" value="1">
<input type="submit" value="REKOD TARIKH PENGGUNA">  
</form>
</div>

</center>

 
<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";
$tblname = "new_record";
 
$chk = $_GET['list'];
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{  die("Connection failed: " . mysqli_connect_error());  }

/*
if(isset($chk))
{
 if($chk == 1)
 {
    $sql = "SELECT * FROM $tblname";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) 
    {
     // output data of each row
     while($row = mysqli_fetch_assoc($result))
      {  
         echo "<center>";
         echo $row["name"]."----->".$row["date"]."<br>";    
         echo "<center>";
      }
    } 
    
    else 
     { echo "0 results";  }
 }
    
elseif($chk == 0)
 {
    $sql = "SELECT * FROM $tblname";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) 
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        { 
            echo "<center>";
            echo $row["name"]."----->".$row["time"]."<br>";
            echo "<center>";            
        }
    } 
           
    else 
    {  echo "No results !"; }
 }
}
*/


if(isset($chk)) {
    if($chk == 1) {
        $sql = "SELECT * FROM $tblname";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            echo "<div class='center'>";
            while($row = mysqli_fetch_assoc($result)) {  
                echo "<div class='output'>";
                echo $row["name"]."----->".$row["date"]."<br>";    
                echo "</div>";
            }
            echo "</div>"; // Close center div
        } else { 
            echo "0 results";  
        }
    } elseif($chk == 0) {
        $sql = "SELECT * FROM $tblname";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            echo "<div class='center'>";
            while($row = mysqli_fetch_assoc($result)) { 
                echo "<div class='output'>";
                echo $row["name"]."----->".$row["time"]."<br>";
                echo "</div>";
            }
            echo "</div>"; // Close center div
        } else {  
            echo "No results !"; 
        }
    }
}



else
mysqli_close($conn);
?>

</body>
</html>