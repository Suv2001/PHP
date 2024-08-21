<?php
//  echo " Hello world!\n";
//  echo " Hello world!\n";
//  echo " Hello world!\n";
//  goto next;
//  echo " Hello world!\n";
//  echo " Hello world!\n";
//  next:
//  echo " Hello Earth!\n";
//  echo " Hello Earth!\n";


for( $a =0; $a<10; $a++ )
{
    if( $a == 5)
    goto next;
echo $a;
}
echo " Hello world!\n";
 next:
 echo " Hello Earth!\n";
 



?>