<?php

session_start();
$_SESSION["name"] = "Suvendu this is from session variable ";

$cookie_name = "user";
$cookie_value = "After 5s all the cookies will be removed from your device  <br>";

setcookie($cookie_name, $cookie_value, time() +(5), "/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(!isset($_COOKIE[$cookie_name]))
        echo "Cookie not set";
    else{
        echo $_COOKIE[$cookie_name];
    }
    ?>    

</body>
</html>