<?php 

/* 
Diferenças print e echo:
    1=  print apenas aceita um argumento.
    2= print retorna sempre o valor1.
*/
    $nome = "Eduardo";
    $apelido = "Oliveira";

    print "$nome $apelido<br>";
    print $nome . ' ' . $apelido . '<br>';
    // print $nome, ' ', $apelido; //inválido;

    if(print($nome)){
        print(" $apelido");
    }

    // como no echo, também podemos usar o print para apresentar resultado de um função.
    print '<br>';
    print strlen("Oliveira");

    // preferencialmente devemos usar o echo, por ser mais ráido e mais curto.
?>

<p><?php echo "teste"?></p> <!-- echo -->
<p><?= "teste" ?></p> <!-- convertido em echo -->
<p><?php print "teste"?></p> <!-- print -->
