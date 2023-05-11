<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $nome = "Carlos";
        $sobrenome = "Pereira";
        const PAIS = "Brasil";

        $idade = 32;
        $peso = 98.5;
        $casado = true;


        echo " Muito prazer, $nome $sobrenome! Você mora no " . PAIS, "  e seu peso é $peso você tem $idade anos e você  é casado? $casado ";
        ?>
    </h1>

</body>

</html>