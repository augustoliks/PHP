<?php 

$n1 	= $_GET ["n1"];
$n2	= $_GET ["n2"];
$aux	= $n1;
 
if($aux %= 2){

echo  "Seu numero é IMPAR: <br>";


	for ($n1 ; $n1<=$n2 ; $n1+=2){
	echo  $n1."<br>";
	}

}


else{
echo  "Seu numero é par <br>";

	for ($n1 ; $n1<=$n2 ; $n1+=2){
	echo  $n1."<br>";
	}

}
?>