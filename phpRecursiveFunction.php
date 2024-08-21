<?php

/*
function display($a)
{
    if($a<=5)
    {
        echo" $a <br>";
        display($a+1);
    }
}

display(1);

*/


//Factroial of a number
function factorial($n) {
    // Base case: factorial of 0 is 1
    if ($n === 0) {
        return 1;
    } else {
        // Recursive case: factorial of n is n multiplied by factorial of (n-1)
        return $n * factorial($n - 1);
    }
}

// Test the factorial function
echo factorial(4); // Output: 120



?>