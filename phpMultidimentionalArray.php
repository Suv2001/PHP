<?php
$emp = [
    [1,2.5,"Suvendu Dash Adhikary"],
    [4,5.5,"Apurba pal"],
    [7,8.5,"Nilashis Shaha"]
];

// echo $emp[2][2];
 

echo "<pre>";

for($i = 0; $i <3; $i++)
{
    for($j = 0; $j <3; $j++)
    {
        echo $emp[$i][$j];
    }
    echo "<br>";
}
echo "</pre>";

echo "<pre>";
print_r($emp);
echo "</pre>";


foreach($emp as $row)
{
    foreach($row as $col)
    {
        echo $col;
    }
    echo "<br>";
}




//Print the data of 2d array like a table using table tag 
echo "<table border = '3px'>";
foreach($emp as $row)
{
    echo "<tr>";//this is for table row
    foreach($row as $col)
    {
        echo "<td>$col</td>"; // this is for table data or column
    }
    echo "</tr>";
}
echo "</table>";




//Print the data of 2d array like a table using table tag  with table head
echo "<table border = '3px'>";
echo "<tr>
<th>Integer</th>
<th>Float</th>
<th>String</th>

</tr>";
foreach($emp as $row)
{
    echo "<tr>";//this is for table row
    foreach($row as $col)
    {
        echo "<td>$col</td>"; // this is for table data or column
    }
    echo "</tr>";
}
echo "</table";
?>