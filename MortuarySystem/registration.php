<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
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


    /* Style form input fields */
    .form input[type="text"],
    .form input[type="email"],
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
</style>

<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username']))
{
// removes backslashes
$username = stripslashes($_REQUEST['username']);

//escapes special characters in a string
$username = mysqli_real_escape_string($con,$username); 
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$trn_date = date("Y-m-d H:i:s");
$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '$password', '$email', '$trn_date')";

$result = mysqli_query($con,$query);
if($result)
{
echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
}
}
else
{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<input type="submit" name="submit" value="Register">
</form>
</div>
<?php 
} 
?>
</body>
</html>