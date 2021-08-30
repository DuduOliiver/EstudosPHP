<?php 


//O PHP contém uma função muito simples de usar para criar strings com um determinado número de repetições concatenadas.

$a = str_repeat('-', 20);   // $a="-------------------"
$b = str_repeat('=|', 20);  // $b="=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|"

// Poderiamos pensar num sistema destes para apresentar linhas com valores do tipo

/*
............100
...........2100
..............0
..........45790

no entando necessitaríamos de mais lógica de programação, para resolver esta questão, existe a função str_pad

*/

$valor = 100;

echo str_pad($valor, '30', '-', STR_PAD_LEFT) . '<br>' ;
echo str_pad($valor, '30', '-', STR_PAD_RIGHT). '<br>' ;
echo str_pad($valor, '30', '-', STR_PAD_BOTH);

// é uma função interessante para sistemas de logs, onde caracteres são monospaced

echo '<pre>';
$valores = [100,2100,0,45790];
foreach($valores as $valor){
    echo str_pad($valor, '30', '.', STR_PAD_LEFT) . PHP_EOL; // PHP_EQL ou . <br>
}

?>