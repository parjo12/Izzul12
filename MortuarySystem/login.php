<html>
<head>
<title> LOGIN </title>
<link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  background-image: url('image/bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
marquee
{
    background-color: white;
    opacity:0.8;
}

.form {
        background-color: rgba(255, 255, 255, 0.8); /* Transparent white background color */
        padding: 40px; /* Add some padding for spacing */
        border-radius: 10px; /* Add border radius for a rounded look */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a slight shadow for depth */
        width: 300px; /* Set form width */
    }


    /* Style form input fields */
    .form input[type="text"],
    .form input[type="password"],
    .form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Ensure padding and border are included in width */
    }

    .form input[type="submit"] {
        background-color: #4CAF50; /* Green submit button */
        color: white;
        border: none;
        cursor: pointer;
    }

    /* Change submit button color on hover */
    .form input[type="submit"]:hover {
        background-color: #45a049;
    }

    .form h1 {
        text-align: center; /* Center the heading */
        margin-bottom: 20px; /* Add some space below the heading */
    }

    .form p {
        text-align: center; /* Center the paragraphs */
        margin-top: 15px; /* Add some space above the paragraphs */
    }
</style>

<body>
<br><br>    
<marquee behavior="scroll" direction="left" scrollamount="20" style="font-size:50px;">WELCOME TO THE MORTUARY MANAGEMENT SYSTEM</marquee>
<br><br><br>
    
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.

if (isset($_POST['username']))
{
// removes backslashes
$username = stripslashes($_REQUEST['username']);

//escapes special characters in a string
$username = mysqli_real_escape_string($con,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);

//Checking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);

if($rows==1)
{
 $_SESSION['username'] = $username;
 // Redirect user to index.php
 header("Location: index.php");}
 else
 {
 echo "<div class='form'>
 <h3>Username/password is incorrect.</h3>
 <br/>Click here to <a href='login.php'>Login</a></div>";
 }
 }
 else
 {
     
?>

<div class="form">   
<h1>Log In</h1>

<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<input name="submit" type="submit" value="Login">
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
<p>Login as <a href='loginadmin.php'>ADMIN </a></p>
</div>
<?php 
} 
?>
<br><br><br>    

</body>
</html>