<?php 

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

$hora = date ('h:i:s');


echo $data."     -      ".$hora ;
echo "<HR>";
?>
<table  width="800" height="200">

<tr rowspan="2"> 
	<td> Resposta x: </td>
	<td> <?php echo $x; ?></td>
</tr>

<tr>
	<td> resposta </td>
</tr>
</table>

echo "Resposta: X=".$x."<br>  Y=".$y;

?>
