<?php

$conn = mysqli_connect('localhost', 'root', '', 'temp');
if($conn){
    echo("Connect Succeafully");
}
else{ 
echo("Unable to connect");
}
$sql = "SELECT * FROM student";

$query = mysqli_query($conn, $sql) or die("Query failed");

if($query){
    echo("Succesfully run the query ");
}
else{ 
echo("Unable to run the query");
}
// $row = mysqli_fetch_assoc($query) or die("unable to fetch ");

echo("<br>");
// print_r($row['fname']);
echo("<br>");


//   using mysqli_fetch_assco metod we can acces the vale using  the column name 

// while($row = mysqli_fetch_assoc($query)){
//     echo("<br>");
//     print_r($row['fname']. "  " . $row['lname']);
//     echo("<br>");
// }

echo("<br>");

//   using mysqli_fetch_row metod we can acces the vale using  the index number

// while($temp = mysqli_fetch_row($query)){
//     echo("<br>");
//     print_r($temp[0]. "  " . $temp[1]);
//     echo("<br>");
// }

$temp = mysqli_fetch_all($query, MYSQLI_ASSOC);  // For associative array
// $temp = mysqli_fetch_all($query); // Multidimention Index array

    echo("<br>");
    print_r($temp[1]);
    echo("<br>");
    
    foreach($temp as $data){
        echo($data['fname']);
        echo("<br>");
}


?>