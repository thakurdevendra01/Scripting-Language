<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect("$servername", "$username", "$password");

if($conn != true){
    echo "Connection Failed";
}else{
    echo "Connection Successful";
}
?>