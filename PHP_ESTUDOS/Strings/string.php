<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false; //boleano

/////////TIPOS COMPOSTOS
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

/////////TIPOS ESPECIAIS
$arquivo = fopen("tiposDados.php", "r");

//var_dump($arquivo);

$nulo = NULL;

var_dump($nulo);




?>