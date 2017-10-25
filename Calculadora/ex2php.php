<?php
	$n1	= $_GET["n1"];
	$n2	= $_GET["n2"];
	$op	= $_GET["op"];

	if ($op==1){
		echo $n1+$n2;
	}
	elseif ($op==2){
		echo $n1-$n2;
	}
	elseif ($op==3){
		echo $n1/$n2;
	}

	elseif ($op==4){
		echo $n1*$n2;
	}
?>
