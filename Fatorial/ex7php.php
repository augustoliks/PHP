<?php 

$i 	= $_GET ["n"];
$r     	 = 1;

for ( $x= $i ;$x > 0 ; $x--)
{
$r = $r*$x;
}

echo $i."! = ".$r;



?>


