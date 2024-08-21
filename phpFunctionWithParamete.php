<?php

function hello1($fname, $lname)
{
    echo " hello $fname $lname";
}


hello1("Suvendu","Dash Adhikary");// function with parameter


function hello2($fname="Ram", $lname="Das")
{
    echo " hello $fname $lname";
}

hello2();

hello2("Suvendu");// function with parameter

$name = "Sitaram";

$title = "Dash Adhikary";
hello2($name, $title);





function hello3($fname="Suvendu", $lname)
{
    echo " hello $fname $lname";
}
hello3("Dash Adhikary");


?>