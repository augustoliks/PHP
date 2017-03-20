<?php
$x	= $_GET["x"];
$y	= $x %= 2;
$z	= $y += 1;

if ($x = $y){

for ($y; $y<=20; $y+=2){
echo $y."<br/>";
}

}

elseif ($x = $z){

for ($y; $y<=20; $y+=2){
echo $y."<br/>";
}

}
?>