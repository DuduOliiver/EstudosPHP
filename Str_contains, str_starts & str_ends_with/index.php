<?php 

/*
Nas regras de negócio do nosso código vamos necessitar usar funções que permitem
verificar qual o conteúdo de uma string. Se contém uma string, se começa pela letra X, etc.
O PHP oferece várias funções para essa finalidade.
*/

$a = 'Esta frase é usada para testes';

// str_cotains - verificar se uma string existe dentro da outra - retorna true or false

$b = 'para';
if(str_contains($a, $b)){
    echo 'sim';
} else{
    echo 'não';
}
echo '<br>';


$c = 'USA';
if(str_contains($a, $c)){
    echo 'sim';
} else{
    echo 'não';
}
echo '<br>';

$c = 'ua';
if(str_contains($a, $c)){
    echo 'sim';
} else{
    echo 'não';
}
echo '<br>';

//PARA Percebermos se uma string começa ou acaba com uma determinada string
//Usamos as funções str_ends_with() e str_starts_with()
//São ambas case sensitive

$a = 'Esta frase é usada para testes';
if(str_starts_with($a, 'E')){
    echo 'Sim! Sim!';
}else {
    echo 'Não! Não!';
}
echo '<br>';


if(str_ends_with($a, 'tes')){
    echo 'Sim! Sim!';
}else {
    echo 'Não! Não!';
}
echo '<br>';

/* 
ESTAS FUNÇÕES são destinadas a sua função específica. Contudo, existe uma função que "unifica" todas as etapas: preg_match(). Uma vez que recorre
ao uso de expressões regulares, veremos em vídeos específicos sobre expressões regulares, como alcançar os mesmos resultados.
*/

?>