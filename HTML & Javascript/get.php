<?php
$Name = $_GET['fname'];
$Email = $_GET['mail'];
$Password = md5($_GET['pwd']);

echo "Name: " . $Name; 
echo "<br>"; 
echo "Email: " . $Email;
echo "<br>"; 
echo "Password: " . $Password;

?>