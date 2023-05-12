<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex011</title>
    <link rel="stylesheet" href="style.php">
    
</head>
<body>
    <?php 

       

        echo '<h1>JSON em PHP</h1>';
        echo '<hr>';


        // $object = new stdClass;
        // $object->nome = "Carlos Soares";
        // $object->curso = "PHP";

        $array = [
            'nome' => 'Carlos Soares',
            'curso' => 'PHP',
            'html' => '<title>WDEV</title>',
            'caracteres' => '\'Teste\' & "teste 2"',
            'categoria' => 'Programação/Desenvolvimento',
            'linguagens' => [
                'PHP',
                'JavaScript',
                'HTML5'
            ],
            'filtros' => [
                'php' => 'Linguagem PHP',
                'atom' => 'Editor Atom',
                'css' => 'Linguagem CSS'
            ],
            'numeros' => [
                "10","20","30","40", 100.75, 55.92, 10.00

            ]
        ];

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        echo '<hr>';
        echo '<h2>Gerar JSON<h/2>';

        $json = json_encode($array,
                            JSON_PRETTY_PRINT |   
                            JSON_UNESCAPED_UNICODE | 
                            JSON_UNESCAPED_SLASHES | 
                            JSON_HEX_TAG |
                            JSON_HEX_QUOT |
                            JSON_HEX_AMP | 
                            JSON_HEX_APOS |
                            JSON_NUMERIC_CHECK |
                            JSON_PRESERVE_ZERO_FRACTION
                            // JSON_FORCE_OBJECT
                        );

        echo "<pre>";
        print_r($json);
        echo "</pre>";

        echo '<hr>';
        echo '<h2>Consumir JSON<h/2>';

        // $json .= 'lksdofnaodfnod';

        $decode = json_decode($json,true);

        echo "<pre>";
        print_r($decode);
        echo "</pre>";


        echo '<hr>';
        echo '<h2>Last Error<h/2>';
        
        $lastError = json_last_error_msg();

        echo "<pre>";
        print_r($lastError);
        echo "</pre>";





    
    
    
    
    ?>



</body>
</html>