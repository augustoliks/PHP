<?php 

$n1 	= $_GET ["n1"];
$n2	= $_GET ["n2"];
$n3 	= $_GET ["n3"];
$n4 	= $_GET ["n4"];
$mf     = ($n1+$n2+$n3+$n4)/4;

if ($mf >= 7){

echo "Você está aprovado!!! sua média final é: ".$mf;
}


elseif ($mf < 7){

echo "Você está reprovado!!! sua média final é: ".$mf;
}

?>

