<?php
include('opendb.php');
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$password = md5($password); 
$result=mysql_query("select * from user where username='$username' and password='$password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
	if ($count > 0){
		session_start();
		$_SESSION['username']=$row['username'];
		header('location:admin.php');
		}else {
$error = "Username or Password is invalid";

}
mysql_close($connection); 

}
?>