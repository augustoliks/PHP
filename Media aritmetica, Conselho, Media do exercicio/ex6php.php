<?php 

$id 	= $_GET ["id"];
$n1 	= $_GET ["n1"];
$n2	= $_GET ["n2"];
$n3	= $_GET ["n3"];
$me	= ($n1+$n2+$n3)/3;
$ma     = ($n1+$n2*2+$n3*3+$me)/7;

if ($ma >= 9){

echo "Aluno: ".$id.
", Sua média de Exercicios é: ".$me.
", Sua nota 1 é: ".$n1.
" ,Sua nota 2 é: ".$n2.
" ,Sua nota 3 é: ".$n3.
" ,Sua media aritmética é: ".$ma.
" ,sua nota de conceito é: A";

}

elseif ($ma == 7 || $ma == 6){

echo "Aluno: ".$id.
", Sua média de Exercicios é: ".$me.
", Sua nota 1 é: ".$n1.
" ,Sua nota 2 é: ".$n2.
" ,Sua nota 3 é: ".$n3.
" ,Sua media aritmética é: ".$ma.
" ,sua nota de conceito é: B";

}

elseif ($ma == 5 || $ma == 6){

echo "Aluno: ".$id.
", Sua média de Exercicios é: ".$me.
", Sua nota 1 é: ".$n1.
" ,Sua nota 2 é: ".$n2.
" ,Sua nota 3 é: ".$n3.
" ,Sua media aritmética é: ".$ma.
" ,sua nota de conceito é: C";

}

elseif ($ma == 3 || $ma == 2 || $ma == 1){

echo "Aluno: ".$id.
", Sua média de Exercicios é: ".$me.
", Sua nota 1 é: ".$n1.
" ,Sua nota 2 é: ".$n2.
" ,Sua nota 3 é: ".$n3.
" ,Sua media aritmética é: ".$ma.
" ,sua nota de conceito é: D";

}

elseif ($ma == 0){

echo "Aluno: ".$id.
", Sua média de Exercicios é: ".$me.
", Sua nota 1 é: ".$n1.
" ,Sua nota 2 é: ".$n2.
" ,Sua nota 3 é: ".$n3.
" ,Sua media aritmética é: ".$ma.
" ,sua nota de conceito é: E";

}


?>
