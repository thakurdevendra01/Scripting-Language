<?php
include("connection.php");

$sql = mysqli_query($conn, "SELECT * FROM student");
echo "<center><h1>Students Record</h1>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>";

while ($det = mysqli_fetch_array($sql)) {
    echo "<tr>";    
    echo "<td>" . $det[0] . "</td>";
    echo "<td>" . $det[1] . "</td>";
    echo "<td>" . $det[2] . "</td>";
    echo "<td>" . $det[3] . "</td>";
    echo "<td>
            <a href='edit.php?id=" . $det[0] . "'> Edit </a> |
            <a href='delete.php?id=" . $det[0] . "'> Delete </a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
