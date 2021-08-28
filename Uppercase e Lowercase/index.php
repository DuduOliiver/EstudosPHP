<?php 

$a = "joao ribeiro";
$b = "Ana Carolina";
$c = "Franscisco Santos";
$d = "CAROLINE";

echo strtoupper($a);
echo strtoupper($b);

echo "<br>";

//Neste caso, as letras acêntuadas continuarão em minúsculas.
$a = "João Luís";
echo strtoupper($a);

// Funções multibyte estão relacionadas com os sistemas de codificação de caracteres
echo mb_strtoupper($a);

//strtolower, transforma em mínuscula.
echo strtolower($d);

// transforma primeira letra em maiúscula
echo ucfirst('joão luís');

//Para letras acêntuadas, ucfirst não transforma em maiúscula e não existe uma função mb_ucfirst, logo precisamos recorrer uma outra forma 
// echo ucfirst('índice');

// lcfirst transforma primeira letra em minúscula
echo lcfirst("João Ribeiro");

// ucwords - transforma todas as primeiras letras de cada palavra numa string em maiúsculas.
echo ucwords("joão ribeiro");

?>