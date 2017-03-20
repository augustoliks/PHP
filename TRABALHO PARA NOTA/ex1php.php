<?php 

date_default_timezone_set('America/Sao_Paulo');

$a 	= $_GET ["n1"];
$b	= $_GET ["n2"];
$c 	= $_GET ["n3"];
$d	= $_GET ["n4"];
$e	= $_GET ["n5"];
$f	= $_GET ["n6"];

$aux1	= ($c*$e)-($b*$f);
$aux2	= ($a*$e)-($b*$d);

$x	= $aux1/$aux2;

$aux3	= ($a*$f)-($c*$d);
$aux4	= ($a*$e)-($b*$d);

$y	= $aux3/$aux4;


$data = date ('d/m/Y');

$hs = date ('h');
$min = date ('i');




echo $data."     -      ".$hs."hs  ".$min."min";
?>

<br> <br>
<HR>




<table  width="200" height="200">

<tr rowspan="2"> 
	<td> Resposta X= </td>
	<td> <?php echo $x; ?></td>
</tr>

<tr>
	<td> Resposta Y=  </td>
	<td> <?php echo $y; ?></td>
</tr>
</table>

<HR>

<table  width="800" height="100">


<tr>
	<td> Por </td>

	<td> -Carlos Augusto dos Santos </td>
</tr>

<tr>
	<td> &nbsp </td>
	<td>-Felipi Augusto Lopes  </td>
</tr>



