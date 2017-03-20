<?php
$x		= $_GET ["x"];
$v		= "vitamina";

switch ($x) {

 case "maça":
 echo "$v A ";
 break;

 case "laranja":
 echo "$v B";
 break;

 case "bolo":
 echo "$v C";

 break;

default:
echo "não possui nutrientes";
}
?> 




