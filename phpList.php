<?php

$emp = [ 

    [1,"Suvendu", "Manager", 20000],
    [2,"Rudra", "CEO", 25000],
    [3,"Nilu", "CFO", 24500],
    [4,"Roumya", "CTO", 20000]
];

echo "<table border='10px' cellpadding='5px'>";
echo "<tr>
<th>Sl No</th>
<th>Name</th>
<th>Post</th>
<th>Salary</th>
</tr>";

foreach($emp as list($sl, $name, $post, $salary))
{
    echo "<tr>
    <td>$sl</td>
     <td>$name</td>
     <td>$post</td> 
     <td> $salary</td>
     </tr>";
    
}
echo "</table>";

echo count($emp)."  Is the output of count function;";
echo "<br>";
echo sizeof($emp)."  Is the output of sizeof function;";
echo "<br>";


$arr = array(

    'sl'=>array(1,"Suvendu", "Manager", 20000)
    );
echo count($arr['sl'],1)."  This is  the output of nested array elements of the 2d array ";
echo "<br>";
echo count($arr,1);

echo "<pre>";
print_r(array_count_values($arr['sl']));
echo "</pre>";

?>