<?php 
    $nome = 'Eduardo';
    $apelido = 'Oliveira';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 PHP</title>

    <style>
        .texto-vermelho{
            color:red;
        }
    </style>

</head>
<body>
    <hr><center><h1>Testando index.php</h1></center><hr>

    <!-- 
    Formas de usar o echo em PHP 
    OBS: É mais para entendermos, porém não é necessário usa-los dessa forma.
    -->

    <?php echo $nome . '' . $apelido ?> <br>
    <?php echo "$nome $apelido" ?> <br>
    <?php echo $nome, " ", $apelido ?> <br>
    <?php echo "<h3>$nome $apelido</h3>"?> <br>
    <?php echo "<h3 class=\"texto-vermelho\">$nome $apelido </h3>" ?> <br>
    <?php echo '<h3 class="texto-vermelho">', "$nome $apelido", "</h3>" ?> <br>
    <?= '<h3 class="texto-vermelho">', "$nome $apelido", "</h3>" ?>
    <p> Nome do cliente: <?= "<strong> $nome $apelido </strong>" ?> </p>
    <p> <?= substr($apelido,0,4) ?></p>
    
    <hr>
    <!-- Forma que faz mais sentido. -->
    <h3> <?php echo "$nome $apelido"?></h3>
    
</body>
</html>