<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .cor{
            color: red;
        }
    </style>

</head>
<body>
    
    <?php 
        //USANDO SÓ PHP

        for ($i=100; $i < 120; $i++){
            echo "<p class=\"cor\"> $i </p>";
        }

    ?>

    <hr>

    <!-- HTML + PHP -->
    <?php for($i = 100; $i < 120; $i++) : ?>
        <p class="cor"> <?=$i?> </p>
    <?php endfor; ?>
    
</body>
</html>