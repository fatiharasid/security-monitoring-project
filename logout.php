
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: logininterface.php"); // Redirecting To Home Page
}
?>