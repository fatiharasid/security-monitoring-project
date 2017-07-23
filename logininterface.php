<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>UMSCCNALAB</title>
<link href="stylelogin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(picture/login.jpg);
	background-repeat: repeat-y;
	background-size: cover;
}
-->
</style>
</head>
<body>
<div id="main">

<h1>&nbsp;</h1>
<h1><strong>CCNA LAB SECURITY </strong></h1>
<h1><strong>MONITORING  SYSTEM</strong></h1>

<div id="login">
<h2 align="center"> Login </h2>
<p align="center">&nbsp;</p>
  
<form action="" method="post">
  
  <p>
  <label>Username :</label>
  <input id="username" name="username" placeholder="username" type="text">
  <label>Password :</label>
  <input id="password" name="password" placeholder="**********" type="password">
  </p>
  <p>
    <input name="submit" type="submit" value=" Login " align="middle">
    <span><?php echo $error; ?></span></p>
</form>
</div>
</div>
</body>
</html>