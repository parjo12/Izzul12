
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> BOOKING FORM </title>
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

img {
  border: 5px solid #555;
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
<br><br><br>

<center><h2 style="border:5px solid grey; width:1250px; height:40px; background-color:turquoise;">JIKA ANDA INGIN MEMBUAT TEMPAHAN LOT KUBUR SILA PILIH DAN KLIK PADA TEMPAT YANG DISEDIAKAN </h2></center>
<table align="center">
    <tr>
        <td>
            <img src="image/lotkubur1.JPG" height="350" width="400" />
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1000 </h1>
             <a href=insertadmin.php>klik</a>
        </td>
        <td>
            <img src="image/lotkubur2.JPG" height="350" width="400" />
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1010 </h1>
            <a href=insertadmin.php>klik</a>
        </td>
        <td>
            <img src="image/lotkubur3.JPG" height="350" width="400" />
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1020 </h1>
            <a href=insertadmin.php>klik</a>
        </td>
        </tr>
    <tr>
        <td>
            <img src="image/lotkubur4.JPG" height="350" width="400" /> 
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1030 </h1>
            <a href=insertadmin.php>klik</a>
        </td>
        <td>
            <img src="image/lotkubur5.JPG" height="350" width="400" />
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1040 </h1>
            <a href=insertadmin.php>klik</a>
        </td>
        <td>
            <img src="image/lotkubur6.JPG" height="350" width="400" />
            <h1 style="border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"> LOT KUBUR D1050 </h1>
            <a href=insertadmin.php>klik</a>
        </td>
        </tr>
</table>
<center><h2 style="border:5px solid grey; width:1200px; height:40px; background-color:turquoise;">ANDA JUGA BOLEH TERUS MEMBUAT TEMPAHAN LOT KUBUR DENGAN MENGISI MAKLUMAT DI BAWAH</h2></center>

<div align="center">
<form name="form1" action="insertadmin.php" method="post">
<input type="submit" value="ADD BOOKING">
</form>

<center><h2 style="border:5px solid grey; width:900px; height:40px; background-color:turquoise;">ANDA BOLEH MEMBUAT PENGESAHAN TEMPAHAN LOT KUBUR ANDA DI BAWAH</h2></center>    
<form name="form2" action="viewadmin.php" method="post">
<input type="submit" value="UPDATE BOOKING">
</form>
</div>
</body>
</html>
