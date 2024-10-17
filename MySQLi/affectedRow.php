<?php
$conn = mysqli_connect('localhost', 'root', '', 'temp') or  die("unable to connect");

$sql = "SELECT * FROM student";

$query = mysqli_query($conn, $sql);

$row = mysqli_affected_rows($conn);

echo (" Affected rows =" .$row);

?>