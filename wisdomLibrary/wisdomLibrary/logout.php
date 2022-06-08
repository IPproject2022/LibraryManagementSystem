<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location://localhost/wisdomLibrary/User Login.php");
}
?>