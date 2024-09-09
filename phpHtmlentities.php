<?php
$str = "<a href = ' hello world'> <b>bold<b>";

echo $str;
//echo "<br";
echo htmlentities($str);

echo htmlentities($str,ENT_COMPAT)

?>