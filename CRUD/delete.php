<?php

include 'connection.php';

$roll = $_GET['roll'];
echo $roll;

$sql = "DELETE FROM student WHERE roll = {$roll}";
mysqli_query($conn, $sql);
header("Location: http://localhost/PHP_Folder/PHP/CRUD/read.php");
mysqli_close($conn);



?>