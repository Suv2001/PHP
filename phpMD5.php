<?php
$str = " Suvendu";

echo md5($str);
echo "<br>";
echo md5($str,true);
echo "<br>";


echo sha1($str);
echo "<br>";
echo sha1($str, true);

?>