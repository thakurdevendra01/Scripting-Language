<?php
$Name = $_POST['fname'];
$Email = $_POST['mail'];
$Password = md5($_POST['pwd']);

echo "Name: " . $Name; 
echo "<br>"; 
echo "Email: " . $Email;
echo "<br>"; 
echo "Password: " . $Password;

?>