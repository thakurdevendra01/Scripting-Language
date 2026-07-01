<?php
include("connection.php");

if (isset($_GET['id'])) {
    $id       = (int)$_GET['id'];
    $Name     = $_POST['fname'];
    $Email    = $_POST['email'];
    $Password = md5($_POST['pwd']); // simple hash

    $sql = "UPDATE student 
            SET Name='$Name', Email='$Email', Password='$Password' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Updated successfully!";
    } else {
        echo "Not updated";
    }
}
?>
