<?php
include("connection.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "Delete from student where id = '$id'");
if($sql == true){
    echo "Deleted Successfully!";
}else{
    echo "Not Deleted";
}
?>