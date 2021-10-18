<?php 

/*
 A utilização de arrays como coleções de dados é algo praticamente presente em todas as aplicações PHP.
 Existem funções de strings também relacionadas com arrays, e estas duas são um exemplo disso.

*/

/*

Explode: Permite transformar uma string num array de strings, recorrendo a um caracter de separação

*/

$str_nomes = 'joao,carlos,ana,antonio';
$nome = explode(',', $str_nomes); //$nome = ['joao', 'carlos', 'ana', 'antonio'];


/* 

Existe um terceiro parâmetro que, sendo usado, define a quantidade máxima de elementos que o array $nomes vai ter.
Não sendo especificado, $nomes vai conter o número máximo de valores possíveis.

*/

$str_nomes = 'joao,carlos,ana,antonio';
$nomes = explode(',', $str_nomes, 2); //$nomes = ['joao,'carlos,ana,antonio'];

/*

IMPLODE permite "colar" numa string um conjunto de elementos de um array.
Para isso usa um caracter de "colagem". Vejamos o exemplo:

*/

$nomes = ['joao','carlos','ana','antonio'];
$str_nomes = implode('|', $nomes);

//$str_nomes = 'joao|carlos|ana|antonio'

