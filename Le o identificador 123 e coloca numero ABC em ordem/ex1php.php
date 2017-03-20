<?php 

$i 	= $_GET ["n1"];
$a	= $_GET ["n2"];
$b 	= $_GET ["n3"];
$c 	= $_GET ["n4"];

if ($i ==1){

	if ($a<$b && $b<$c){
	echo "ORDEM CRESCENTE: A=".$a."  B=" .$b. "  C=" .$c;
	}
	
	if ($a<$c && $c<$b){
	echo "ORDEM CRESCENTE: A=".$a."  C=" .$c. "  B=" .$b;
	}

	elseif ($b<$c && $c<$a){
	echo "ORDEM CRESCENTE: B=".$b."  C=" .$c. "  A=" .$a;
	}
	
	elseif ($b<$a && $a<$c){
	echo "ORDEM CRESCENTE: B=".$b."  A=" .$a. "  C=" .$c;
	}

	elseif ($c<$a && $a<$b){
	echo "ORDEM CRESCENTE: C=".$c."  A=" .$a. "  B=" .$b;
	}

	elseif ($c<$b && $b<$a){
	echo "ORDEM CRESCENTE: C=".$c."  B=" .$b. "  A=" .$a;
	}



}


elseif ($i ==2){
	
	if ($a>$b && $b>$c){
	echo "ORDEM DECRESCENTE: A=".$a."  B=" .$b. "  C=" .$c;
	}
	
	if ($a>$c && $c>$b){
	echo "ORDEM DECRESCENTE: A=".$a."  C=" .$c. "  B=" .$b;
	}

	elseif ($b>$c && $c>$a){
	echo "ORDEM DECRESCENTE: B=".$b."  C=" .$c. "  A=" .$a;
	}
	
	elseif ($b>$a && $a>$c){
	echo "ORDEM DECRESCENTE: B=".$b."  A=" .$a. "  C=" .$c;
	}

	elseif ($c>$a && $a>$b){
	echo "ORDEM DECRESCENTE: C=".$c."  A=" .$a. "  B=" .$b;
	}

	elseif ($c>$b && $b>$a){
	echo "ORDEM DECRESCENTE: C=".$c."  B=" .$b. "  A=" .$a;
	}


}

elseif ($i ==3){

	if ($a<$b && $b<$c){
	echo "MAIOR NO MEIO: B=" .$b."  C=" .$c."   A=".$a ;
	}

	elseif ($b<$c && $c<$a){
	echo "MAIOR NO MEIO: C=".$c."  A=" .$a. "  B=" .$b;
	}

	elseif ($c<$a && $a<$b){
	echo "MAIOR NO MEIO: =A".$a."  B=" .$b. "  C=" .$c;
	}

}

?>

