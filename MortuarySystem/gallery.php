
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> GALLERY </title>
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

body{
    margin: 0;
    padding: 0;
}

.slidershow{
    width: 700px;
    height: 400px;
    overflow: hidden;
}

.middle{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.navigation{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

.bar{
    width: 50px;
    height: 10px;
    border: 2px solid #fff;
    margin: 6px;
    cursor: pointer;
    transition: 0.4s;
}

.bar:hover{
    background: #fff;
}
input[name="r"]{
    position: absolute;
    visibility: hidden;    
}

.slides{
    width: 500%;
    height: 100%;
    display: flex;
}

.slide{
    width: 20%;
    transition: 0.6s;    
}
.slide img{
    width: 100%;
    height: 100%;  
}

#r1:checked ~ .s1{
    margin-left: 0;    
}
#r2:checked ~ .s1{
    margin-left: -20%;    
}
#r3:checked ~ .s1{
    margin-left: -40%;    
}
#r4:checked ~ .s1{
    margin-left: -60%;    
}
#r5:checked ~ .s1{
    margin-left: -80%;    
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
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    
    <center><h1 style="border:5px solid grey; width:700px; height:40px; background-color:turquoise;"> ANTARA AKTIVITI-AKTIVITI MASJID AT-TAQWA </h1></center>
    <div class="slidershow frame">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked> 
             <input type="radio" name="r" id="r2">
              <input type="radio" name="r" id="r3">
               <input type="radio" name="r" id="r4">
                <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <img src="image/aktiviti1.JPG" alt="">
            </div>
            <div class="slide">
                <img src="image/aktiviti2.JPG" alt="">
            </div>
            <div class="slide">
                <img src="image/aktiviti3.JPG" alt="">
            </div>
            <div class="slide">
                <img src="image/aktiviti4.JPG" alt="">
            </div>
            <div class="slide">
                <img src="image/aktiviti5.JPG" alt="">
            </div>
            </div>
        
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
        </div>
    
    <br><br>
    <center><h1 style="border:5px solid grey; width:700px; height:40px; background-color:turquoise;">JADUAL KULIAH TERKINI MASJID AT-TAQWA </h1></center>
    <img src="image/ok.JPG" alt="Trulli" width="500" height="333">
    <br>
    <center><h1 style="border:5px solid grey; width:500px; height:40px; background-color:turquoise;">TAKWIM ISLAM 2024 </h1></center>
    <img src="image/ok1.JPG" alt="Trulli" width="500" height="333">
    <br>
    <center><h1 style="border:5px solid grey; width:500px; height:40px; background-color:turquoise;">ADAB-ADAB MELAWAT PESAKIT </h1></center>
    <img src="image/jadual3.JPG" alt="Trulli" width="500" height="333">
    
        
    
    <footer>
   
</footer>
</center>

</body>
</html>
