<?php
date_default_timezone_set("America/Sao_Paulo");
$info=date('l, d \d\e\ F \d\e Y - H:i:s:u'); // dia da semana;
echo $info;



$dia_atual = date("1");
if ($dia_atual == "saturday")
{
echo "bom finalde semana";

echo "divirta-se.";
}

elseif ($dia_atual == "sunday")
{
echo "bom dia de descanso";
}

else
{

echo "boa semana";

echo "bom trabalho";
}

?>