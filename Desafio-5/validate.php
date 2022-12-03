<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>


</head>
<body>

    <?php

    $numero = $_POST['numero'];

    for ($i=0; $i <= 10; $i++) { 
        echo "$numero x $i = ", $numero * $i, "<br>";
        
    }




    ?>

<br>
<a href="index.php"><button>Voltar</button></a>




</body>
</html>