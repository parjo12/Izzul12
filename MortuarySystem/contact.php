
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> CONTACT </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>

      /*  .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        */
        .wrapper {
    display: flex;
}

.button {
    margin-right: 20px; /* Adjust spacing between buttons */
}

.icon {
    margin-right: 5px; /* Adjust spacing between icon and text */
}


        .button {
            display: flex;
            align-items: center;
            margin: 10px;
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: 2px solid #0067ab;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .button:hover {
            background-color: #0067ab;
            color: white;
            transform: scale(1.05);
        }

        .button .icon {
            font-size: 25px;
            margin-right: 10px;
        }

        .button span {
            font-size: 20px;
            font-weight: 500;
        }
  
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

@import url('https://fonts.googleapis.com/css?')

html,body{
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
}

.wrapper .button{
    display: inline-block;
    height: 50px;
    width: 60px;
    float: left;
    margin: 0 5px;
    overflow: hidden;
    border-radius: 50px;
    cursor: pointer;
    box-shadow: 0px 10px 10px rgba(0,0,0,0.1); 
    transition: all 0.3s ease-out;
}

.wrapper .button:hover{
    width: 200px;
    
}

.wrapper .button .icon{
    display: inline-block;
    height: 60px;
    width: 60px;
    text-align: center;
    border-radius: 50px;
    box-sizing: border-box;
    line-height: 60px;
    transition: all 0.3s ease-out;
}

.wrapper .button:nth-child(1):hover .icon{
    background: #4267B2;
}
.wrapper .button:nth-child(2):hover .icon{
    background: #1DA1F2;
}
.wrapper .button:nth-child(3):hover .icon{
    background: #E1306C;
}
.wrapper .button:nth-child(4):hover .icon{
    background: #333;
}
.wrapper .button:nth-child(5):hover .icon{
    background: #ff0000;
}

.wrapper .button .icon i{
    font-size: 25px;
    line-height: 60px; 
    transition: all 0.3s ease-out;
}

.wrapper .button span{
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    margin-left: 10px;
    transition: all 0.3s ease-out;
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
    <br><br>
    <center><h2 style="border:5px solid grey; width:1300px; height:40px; background-color:turquoise;"> JIKA ANDA INGIN BERTANYAKAN SEBARANG PERTANYAAN ANDA BOLEH TERUS MELAYARI LAMAN SOSIAL DI BAWAH</h2></center>
    <body>
   
    <div class="wrapper">
        <div class="button">
            <i class="fab fa-facebook-f icon"></i>
            <a href="https://www.facebook.com/masjidattaqqwaselarongbatang/" target="_blank" rel="noopener noreferrer">Facebook</a>
        </div>


        <div class="button">
            <i class="fab fa-twitter icon"></i>
            <a href="https://twitter.com/home" target="_blank" rel="noopener noreferrer">Twitter</a>
        </div>


        <div class="button">
            <i class="fab fa-instagram icon"></i>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a>
        </div>

        <div class="button">
            <i class="fab fa-whatsapp icon"></i>
            <a href="https://api.whatsapp.com/send?phone=601114384303&app=facebook&entry_point=page_cta&fbclid=IwAR0fiB2NqYcNEUlQ0iQubQO1ppbXtgqP8vcOpVrpVD9hn2vA8yfdtYJzq0Q" target="_blank" rel="noopener noreferrer">Whatsapp</a>
        </div>

        <div class="button">
            <i class="fab fa-youtube icon"></i>
            <a href="https://www.youtube.com/channel/UCln1zqPhaA4XQcmkLA_SqLw" target="_blank" rel="noopener noreferrer">Youtube</a>
        </div>
    </div>
</body>
    <!--
    <meta charset="utf-8">
    <title>Social Media Icons | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <div class="wrapper">
        <div class="centerdiv">
        <div class="button">
            <div class="icon"><i class="fab fa-facebook-f"></i></div>
            <a href="https://www.facebook.com/masjidattaqqwaselarongbatang/"></a>
            <span>Facebook</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <a href="https://twitter.com/home"></a>
            <span>Twitter</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-instagram"></i></div>
            <a href="https://www.instagram.com/"></a>
            <span>Instagram</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-whatsapp"></i></div>
            <a href="https://api.whatsapp.com/send?phone=601114384303&app=facebook&entry_point=page_cta&fbclid=IwAR0fiB2NqYcNEUlQ0iQubQO1ppbXtgqP8vcOpVrpVD9hn2vA8yfdtYJzq0Q"></a>
            <span>Whatsapp</span>
        </div>
        <div class="button">
            <div class="icon"><i class="fab fa-youtube"></i></div>
            <a href="https://www.youtube.com/channel/UCln1zqPhaA4XQcmkLA_SqLw"></a>
            <span>Youtube</span>
        </div>
    </div>
    </div>
-->
    <br><br><br>
    <center><h2 style="border:5px solid grey; width:500px; height:40px; background-color:turquoise;">PETA KEDUDUKAN MASJID AT-TAQWA</h2></center>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kampung%20Selarong%20Panjang,%2009700%20Kota%20Sarang%20Semut,%20Kedah&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">interactive google map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
    <center><h2 style="border:5px solid grey; width:300px; height:40px; background-color:turquoise;">KATA-KATA PERINGATAN</h2></center>
    <img src="image/hadis1.JPG" alt="Trulli" width="500" height="333">
    <br><br><br>
    <footer>
    
</footer>
</center>

</body>
</html>
