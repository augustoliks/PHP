<?php

$p	= $_GET["p"];
$a	= $_GET["a"];
$a2	= $a*$a;
$imc	= $p/$a2;

if ($imc <= 20){
echo "Abaixo do Peso";
}

elseif ($imc <= 25){
echo "Normal";
}

elseif ($imc <= 30){
echo "Excesso de Peso";
}

elseif ($imc <= 35){
echo "Obesidade";
}

elseif ($imc > 35){
echo "Obesidade Morbida";
}

?>
