<?php
$conn = mysqli_connect("localhost","root", "", "temp") or die("Connection error". mysqli_connect_error());


$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("Query error". mysqli_error());

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_row($result)){
        echo $row[0];
    }
}
 

?>