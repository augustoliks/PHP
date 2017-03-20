<?php 

$nome 	= $_GET ["nome"];
$f 	= $_GET ["f"];
$m	= $_GET ["m"];
$h 	= $_GET ["h"];


if ($f){

$pif	= (62.1*$h)-44.7;

echo "$nome seu peso ideal é: ".$pif;
}


elseif ($m){

$pim	= (72.7*$h)-58;

echo "$nome seu peso ideal é: ".$pim;
}


?>

