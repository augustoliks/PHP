<?php
$data = date ('d/m/Y');
echo "A data é:".$data;

$hora = date ('h:i:s');
echo "<br> e a hora e $hora";

$completa = getdate(time('h:i:s'));
echo"<br>o getdata é ($completa[0])";
$micro=microtime();
echo"<br>e o microtime é ($micro)";
?>
