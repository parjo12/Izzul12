
<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<html>
<head>
<title> ABOUT </title>
<link rel="stylesheet" href="style.css">
<style>   
   body {
  background-image: url('image/gambar18.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

body { 
  color: white; 
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

.container {
  position: relative;
  font-family: Arial;
  text-align: center;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 340px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

.container {
  position: relative;
  font-family: Arial;
  text-align: center;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 340px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
</head>

<body>
<div align="right">    
<marquee><h2>WELCOME TO THE MORTUARY MANAGEMENT SYSTEM <?php echo $_SESSION['username']; ?>!</h2></marquee>
</div>
<br><br>

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
 <center>
    <h1 style="text-align:center; color:black; border:5px solid grey; width:400px; height:50px; background-color:turquoise;"> ~ MUKADDIMAH ~ :) !</h1>
 </center>
  <center>
<h2 style="text-align:center; color:black; border:grey; border-width:5px; border-style:solid; color:black; background-color:turquoise;"><p> <b> KEMATIAN </b> adalah sesuatu yang pasti dan kita harus bersedia menghadapinya kerana ia merupakan titik permulaan kepada penghidupan yang kekal abadi. <br><br></p>
<p> <b> HANYA MUKMIN  </b> yang dipanggil menghadap Tuhannya dengan hati bersih memperolehi kejayaan. <br><br></p>
<p> Menguruskan jenazah adalah merupakan perkara yang tidak boleh kita elakkan begitu sahaja. Ianya merupakan fardhu kifayah ke atas umat Islam. Dengan adanya sebahagian umat Islam yang mengetahuinya akan selesailah tanggungjawab itu. </p>
<center>
<p><b>Namun dalam keadaan sekarang ini, kesedaran di kalangan generasi muda untuk melaksanakan tanggungjawab ini amat tipis sekali. Ramai dari generasi muda yang tidak tahu cara-cara menguruskan jenazah dan hanya menyerahkan sepenuhnya kepada jenerasi yang lebih tua dari mereka untuk melaksanakannya. Bayangkanlah suatu hari nanti ayah atau ibu kita meninggal dunia. Tergamakkah kita membiarkan orang lain menguruskannya sedangkan diri kita hanya melihat tanpa sebarang ilmu. </b></p>
<p><b>Sejajar dengan itu maka terbitlah halaman web ini bagi memberikan sedikit bimbingan dan panduan. Seperkara yang perlu diingat di samping kita menguruskan jenazah, diharap ianya dapat menjadi pengajaran kepada kita yang masih hidup untuk bersiap sedia menuruti jejaknya suatu hari nanti. Dengan adanya panduan-panduan ini adalah diharapkan sedikit sebanyak dapat memberi pengetahuan kepada para pelawat jika berlaku sesuatu kematian agar dapat membantu menguruskannya. Marilah kita memahami kehendak fardhu kifayah ini, moga-moga ianya dapat menjadi penyambung kesempurnaan dalam pengamalan syariat agama kita.  </b></p></h2>
<h1 style="text-align:center; color:black; border:5px solid grey; width:400px; height:50px; background-color:turquoise;"> ~ IN SHAA ALLAH ~ :) !</h1>
</center>
</center>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <center><h2 style="text-align:center; color:black; border:5px solid grey; width:400px; height:50px; background-color:turquoise;"> SEJARAH MASJID AT-TAQWA </h2></center>
    
<div class="container">
    <img src="image/masjid01.JPG" alt="Nature" style="width: 700px; height: 500px;">
  <div class="text-block">
    <h4>MASJID AT-TAQWA </h4>
    <p>Simpang Empat Kangkong Kedah</p>
  </div>
</div>
    <br><br>
<article class="all-browsers">
  <h1>Alamat</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p style="color:black;"> Masjid Al-Taqwa Selarong Batang, Km 12, Simpang Empat, 04450 Alor Setar, Kedah Darul Aman, Malaysia.</p>
  </article>
  <h1>Sejarah</h1>
  <article class="browser">
    <h2>Mozilla Firefox</h2>
    <p style="color:black;"> Telah dibina pada tahun 1925. Pembinaan masjid ini telah dijalankan atas wakaf orang ramai dengan orang ramai mewakafkan wang ringgit dan juga peralatan pembinaan masjid seperti tiang seri pembinaan masjid ini dijalankan dengan gotong-royong penduduk setempat atau kariah masjid tersebut hinggalah siap dibina.</p>
  </article>
  <h1>Binaan</h1>
  <article class="browser">
    <h2>Microsoft Edge</h2>
    <p style="color:black;"> Senibina yang dibangunkan ialah senibina melayu dan arab seperti juga masjid yang lain ada.kubah, menara, bumbung, mihrab, ruang solat, seni khat di bina oleh ahli-ahli kariah sendiri.keseluruhan senibina merupakan seni bina melayu moden dan arab.</p>
  </article>
  <h1>Kemudahan</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p style="color:black;"> Tempat wudhu, telekung, sejadah, bilik mesyuarat, ruang makan, ruang memasak, parkir, tandas awam</p>
  </article>
  <h1>Keistimewaan</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p style="color:black;"> merupakan salah 1 masjid lama yang dibina dari kayu. dibina secara gotong royong. mengikut sejarah pembinaan masjid tersebut, cara pengangkutan dilakukan mangikut jalan airkayu ditarik melalui jalan air secra gotong royong.</p>
  </article>
</article>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <center><h2 style="text-align: center; color: black; border:5px solid grey; width:500px; height:50px; background-color:turquoise;"> CARTA ORGANISASI MASJID AT-TAQWA</h2></center>

<div class="container">
    <img src="image/carta1.JPG" alt="Nature" style="width: 700px; height: 500px;">
  <div class="text-block">
    <p>AJK-AJK MASJID-AT-TAQWA</p>
  </div>
</div>
    

</body>
</html>
