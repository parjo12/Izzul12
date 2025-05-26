
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
  height: 40px;
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
    padding: 0;
    margin: 0;
    background-color: floralwhite;   
}
h1{
    margin-top: 50px;
    margin-left: 510px;
    font-size: 60px;
    font-family: 'Karla', sans-serif;
    font-weight: lighter;
}

.slider-frame{
    overflow: hidden;
    height: 500px;
    width: 1200px;
    margin-left: 360px;
    margin-top: 20px;
}
@-webkit-keyframes slide_animation{
    0% {left:0px;}
    10% {left:0px;}
    20% {left:1200px;}
    30% {left:1200px;}
    40% {left: 2400px;}
    50% {left: 2400px;}
    60% {left: 1200px;}
    70% {left: 1200px;}
    80% {left: 0px;}
    90% {left: 0px;}
    100% {left:0px;}
}

.slide-images{
    width: 6000px;
    height: 800px;
    margin: 0 0 0 -2400px;
    position: relative;
    -webkit-animation-name: slide_animation;
    -webkit-animation-duration: 33s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running;
}

.img-container{
    height: 800px;
    width: 1200px;
    position: relative;
    float: left;
}

* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>

<body>  
    <img src="image/jawi2.png" alt="Trulli" width="600" height="100" class="center">

<br><br>
<div align="right"> 
<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
</div>
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
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
<title>slide image tutorial</title>

<h1 style="border:5px solid grey; width:320px; height:70px; background-color:turquoise;">INFO TERKINI</h1>
<div class="slider-frame">
    <div class="slide-images">
      <div class="img-container">  
          <img src="image/masjid5.JPG">
      </div>
      <div class="img-container">
          <img src="image/masjid6.JPG">
      </div>
      <div class="img-container">
          <img src="image/masjid7.JPG">
      </div>
    </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- MAIN (Center website) -->
<div class="main">

<h2 style="border:5px solid grey; width:350px; height:40px; background-color:turquoise;">JADUAL MASJID AT-TAQWA</h2>
<h2 style="border:5px solid grey; width:600px; height:40px; background-color:turquoise;">PENCERAMAH-PENCERAMAH YANG MENGAJAR</h2>
<p style="border:5px solid grey; width:500px; height:35px; background-color:turquoise;">Antara penceramah yang mengajar mengikut bidang masing-masing</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="image/kuliah9.JPG" alt="Mountains" style="width:100%">
      <h3>YBHG AL FADHIL USTAZ ABU JADID HAJI RAHMAN ALI</h3>
      <p>Beliau seorang yang tegas dan mahir dalam bidang ilmu Kitab-kitab Pengajian Sulamun Tauhid.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/kuliah2.JPG" alt="Lights" style="width:100%">
      <h3>YBHG TUAN SYEIKH YUSOFF BIN HAJI LEBAI AHMAD</h3>
      <p>Beliau seorang guru pondok serta mahir dalam bidang ilmu Kitab-kitab Pengajian Hadis Qudsi.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/kuliah3.JPG" alt="Nature" style="width:100%">
      <h3>YBHG Al FADHIL USTAZ MOHD ZAKI HJ SYEIKH AHMAD</h3>
      <p>Beliau seorang yang tawadduk serta mahir dalam bidang ilmu Kitab Fiqh dan Usuluddin.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/kuliah4.JPG" alt="Mountains" style="width:100%">
      <h3>YBHG TUAN SYEIKH SYAIKHUNA BIN ZAKARIA</h3>
      <p>Beliau mahir dalam bidang Lawaqih Anwar, Karangan Al Imam Abdul Wahhad Asy-Sya’roni.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="image/kuliah5.JPG" alt="Bear" style="width:100%">
  <h3>KEADAAN ORANG RAMAI DI DALAM MASJID AT-TAQWA</h3>
  <p>Ini adalah keadaan orang ramai apabila berada di dalam masjid jika waktu sembahyang atau mendengar kuliah ilmu harian.</p>
  <p>Perkara seperti ini dilakukan adalah bertujuan untuk mengekang penularan wabak COVID-19 yang sedang berlaku pada hari ini sesuai mengikut kehendak jabatan kesihatan dan majlis agama negeri kedah.</p>
</div>

<!-- END MAIN -->
</div>


<footer>
   
</footer>
</body>
</html>