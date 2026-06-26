<?php
include("connection.php");

$sql = mysqli_query($conn, " select * from student");
echo "ID " . " " . "Name " . " " ."Email " . "Password ". "<br> ";
while($det = mysqli_fetch_array($sql)){
    echo $det[0] . " " . $det[1] . " " . $det[2] . " " . $det[3] . "<br>";
}

?>