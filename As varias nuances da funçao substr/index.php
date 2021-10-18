<?php

/*

A função substr (substring) é usada com muita frequência para capturarmos uma parte de uma string,
seja para criar uma nova variável ou simplismente para apresentar uma parte de uma string. Acontece
que está função tem muito mais nuances do que habitualmente estamos habituados a usar.
*/

$a = "Esta frase é para teste";
$b = substr($a, 5, 10); //$b = 'frase é p';

echo ($b);
echo("<br>");

/*
Se verificarmos o que aconteceu, a variável b apenas ficou com 9 caracteres e não com 10 a partir da
posição 5. Mais uma vez teremos que usar a versão multibytes - mb_substr();
Independentemente as assinatura são idênticas;

*/


// Se colocarmos índice negativo, iremos pedir para a função que extraia a partir do fim.

$c = substr($a, -4, 2);
$d = substr($a, -3);

print($c);
echo("<br>");

print($d);

$e = 'asdasd';
$f = substr($e, 8, -3);

/*
Antes da versão 8 do PHP, a função devolvia um valor false em caso de erro.
Agora passa a devolver uma string vazia.
*/

echo "<br>";
var_dump($f);

?>