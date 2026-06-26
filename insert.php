<?php
include("connection.php");

$Name = $_POST['fname'];
$Email = $_POST['email'];
$Password = md5($_POST['pwd']);

$sql = mysqli_query($conn, "insert into student(Name,Email,Password)values('$Name','$Email','$Password')");

if($sql ==  true){
    echo "Inserted Successfully";
}else{
    echo "Data cannot be inserted";
}
?>