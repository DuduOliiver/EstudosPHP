<?php 

/*
Muitas vezes vamos necessitar calcular o número de caracteres de uma string com muita frequência recorremos rapidamente
ao uso da função strlen
*/

$a = "Uma frase para testes.";

$comprimento = strlen($a);

echo strlen($a);    // 22

$b = null;
$c = '';

echo strlen($b);    //0
echo strlen($c);    //0

$sim = true;
$nao = false;

echo strlen($sim);  //1
echo strlen($nao);  //0

$numero = 1250;
echo strlen($numero);   //4

//$nomes = ['ana', 'carlos', 'miguel'];
//echo strlen($nomes);                    //Gera um erro. Não podemos usar em arrays, apenas em strings.

$f = "João Ribeiro";
echo strlen($f);        // irá apresentar o valor 13, devido ao acento. ainda que só existam 12 caracteres.
echo mb_strlen($f);     // 12. solução para resolver o problema