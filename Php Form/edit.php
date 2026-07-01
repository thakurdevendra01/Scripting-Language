<?php
include("connection.php");
$id = $_GET['id'];
$Name = $_POST['fname'];
$Email = $_POST['email'];
$Password = md5($_POST['pwd']);
$sql = mysqli_query($conn, "update student set Name = '$Name',Email = '$Email' , Password = '$Password' where id = '$id' ");
if($sql == true){
    echo "Updated successfully!";
}else{
    echo "Not updated";
}

?>