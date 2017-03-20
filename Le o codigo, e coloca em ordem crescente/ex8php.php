<?php 

$i 	= $_GET ["i"];
$a 	= $_GET ["a"];
$b 	= $_GET ["b"];
$c 	= $_GET ["c"];

if ($i==1){

	if ($a<$b && $b<$c){
	echo "ORDEM CRESCENTE: ".$a."  " .$b. "  " .$c;
	}
	
	elseif ($a==$b && $a==$c){
	echo "NUMEROS IGUAIS: ".$a."  " .$b. "  " .$c;
	}

	elseif ($a==$b && $C>$a){
	echo "VARIAVEL A & B SÃO IGUAIS, E O MAIOR NUMERO É O C: ".$c."  >  ".$a." = ".$b;
	}

	elseif ($a==$c && $b>$c){
	echo "VARIAVEL A & C SÃO IGUAIS, E O MAIOR NUMERO É O B: ".$b."  >  ".$a." = " .$c;
	}

	elseif ($b==$c && $a>$c){
	echo "VARIAVEL B & C SÃO IGUAIS, E O MAIOR NUMERO É O A: ".$a."  >  ".$c." = " .$b;
	}

	elseif ($a==$b && $a>$c){
	echo "VARIAVEL A & B SÃO IGUAIS E MAIORES DO QUE A VARIAVEL C ".$a." = ".$b." > " .$c;
	}
	
	elseif ($a==$b && $a>$c){
	echo "VARIAVEL B & C SÃO IGUAIS E MAIORES DO QUE A VARIAVEL A ".$b." = ".$c." > " .$a;
	}
	
	elseif ($a==$b && $a>$c){
	echo "VARIAVEL A & C SÃO IGUAIS E MAIORES DO QUE A VARIAVEL B ".$a." = ".$c." > " .$b;
	}
	
	
}

elseif ($i==2){

	if ($a<$b && $b<$c){
	echo "ORDEM DECRESCENTE: ".$c."  " .$b. "  " .$a;
	}

	
}

elseif ($i==3){


	if ($a<$b && $b<$c){
	echo "NUMERO DO MEIO: ".$b;
	}

}


?>


