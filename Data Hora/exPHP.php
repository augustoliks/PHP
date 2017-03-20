<?php

date_default_timezone_set('America/Sao_Paulo');

$data = date ('d/m/Y');

$hs = date ('h');
$min = date ('i');




echo $data."     -      ".$hs."hs  ".$min."min   ";

$data = date ('w');

switch ($data) {

 case "1":
 echo "Segunda-Feira";
 break;

 case "2":
 echo "Terça-Feira";
 break;

 case "3":
 echo "Quarta-Feira";
 break;

 case "4":
 echo "Quinta-Feira";
 break;

 case "5":
 echo "exta-Feira";
 break;

 case "6":
 echo "Sábado";
 break;

 case "7":
 echo "Domingo";
 break;

}
?> 




