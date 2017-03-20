<?php

$i	= $_GET["i"];
$f	= $_GET["f"];

$y	= $i %= 2;

if ($y<=10){

for ($i; $i<$f; $y+=2){
echo $y."<br/>";
}

}



?>
