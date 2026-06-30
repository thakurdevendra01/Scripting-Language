<?php
include("connection.php");
$id = $_GET['id'];
$Name = "Aakash";
$Email = "aakash@gmail.com";
$Password = md5("123456");
$sql = mysqli_query($conn, "update student set Name = '$Name',Email = '$Email' , Password = '$Password' where id = '$id' ");
if($sql == true){
    echo "Updated successfully!";
}else{
    echo "Not updated";
}

?>