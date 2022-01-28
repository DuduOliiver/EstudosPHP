<?php

/*
Tal como o nome deixa claro, permite fazer substituição de strings dentro de uma string.
Neste caso, substitui todas as ocorrências de uma string.
*/
$count=2;
$a = "Este texto serve para testar o sistema </br>";
echo str_replace('te', 'TE', $a);

$b = str_replace(' ', '--->', $a);
echo $b;

$c= "Este texto serve para testar o sistema </br>";
$vogais = ['a','e','i','o','u','A','E','I','O','U'];
$d = str_replace($vogais, "", $a);
echo $d;

$d = "Este jantar está muito bom";
$original = ['jantar', 'bom'];
$novos = ['almoço', 'ruim'];

$final = str_replace($original, $novos, $d);
echo $final;

//existe a função str_ireplace() que, como o 'i' indica executa a mesma
//operação, porém é case insensitive.

