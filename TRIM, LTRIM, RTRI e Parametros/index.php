<?php 

//TRIM, Remove espaços e outros caracteres do início e do final de uma string

$a = "           Isso é uma string.        ";

$a = trim($a);
$b = trim($a);
echo trim($a) . '<br>';

//LTRIM(left) e RTRIM(right)    =   Remove espaços do início ou do fim da string.

echo ltrim($a) . '<br>';
echo rtrim($b) . '<br>';

//Podemos usar um segundo parâmetro nesta função.
$b = "abcdef";
echo trim($b, 'a') . '<br>';    //"bcdef"
echo trim($b, 'af') . '<br>';   //"bcde"
echo trim($b, 'abef') . '<br>'; //"cd"

// Apesar de existirem outras formas, podemos limpar o $_POST
$usuario = trim($_POST['usuario']);

//Não usar na senhas. ELas podem conter espaço propositalmente.
?>