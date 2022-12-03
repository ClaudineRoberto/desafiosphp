<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>


</head>
<body>

    <?php

    $idade = $_POST['idade'];

    if ($idade >= 18) {
        echo "<h1>Você é MAIOR de idade!</h1>";
    } else{
        echo "<h1>Você é MENOR de idade!</h1>";
    }





    ?>

<a href="index.php"><button>Voltar</button></a>




</body>
</html>