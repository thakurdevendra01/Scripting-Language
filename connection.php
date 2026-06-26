<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "scriptingdb";
$conn = mysqli_connect("$servername", "$username", "$password", "$database");

if($conn != true){
    echo "Connection Failed";
}else{
    echo "";
}
?>