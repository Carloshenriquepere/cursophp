<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex010</title>
</head>
<body>

    <?php 
        echo '<h1>7 dicas - Arrays em PHP</h1>';

        echo '<hr>';
        echo '<h2> 1 - Extract </h2>';

        $array = [
            'nome' => 'Carlos Soares',
            'cuso' => 'PHP',
            'email' => 'carlos@gmail.com' 
        ];

        echo "<pre>";
        print_r ($array);
        echo "</pre>";

        extract($array, EXTR_PREFIX_ALL, 'CH');

        echo "<pre>";
        print_r ( $CH_nome);
        echo "</pre>";

        echo "<pre>";
        print_r ( $CH_email);
        echo "</pre>";

         
        echo '<hr>';
        echo '<h2> 2 - Compact</h2>';

        $Rua = 'Rua Teste';
        $NUMERO = '10';
        $baiRrO = '';
        $cidadE = 'Porto Alegre';
        $uf = 'RS';
        $cEp = '12345-678';
        $comPLemento = 'Casa 1';

        $array = compact('Rua', 'NUMERO', 'baiRrO', 'cidadE', 'uf', 'cEp', 'comPLemento');

        echo "<pre>";
        print_r ($array);
        echo "</pre>";

        echo '<hr>';
        echo '<h2> 3 - Concatenação condicional de valores</h2>';

        $endereco = implode(' - ', array_filter($array));

        echo "<pre>";
        print_r ($endereco);
        echo "</pre>";

        echo '<hr>';
        echo '<h2> 4 - Chaves maiúsculas e minúsculas</h2>';

        $chaves = array_change_key_case($array,CASE_UPPER);//CASE_LOWER - MINÚSCULAS

        echo "<pre>";
        print_r ($chaves);
        echo "</pre>";

        echo '<hr>';
        echo '<h2> 5 - Dados aleatórios</h2>';

        $array = ['Azul', 'Amarelo', 'Vermelho', 'Verde', 'Branco'];

        echo "<pre>";
        print_r ($array);
        echo "</pre>";

        echo "<pre>";
        print_r ($array[array_rand($array)]);
        echo "</pre>";

        // shuffle($array);

        // echo "<pre>";
        // print_r ($array);
        // echo "</pre>";

        // echo "<pre>";
        // print_r ($array[0]);
        // echo "</pre>";

        echo '<hr>';
        echo '<h2> 6 - Somando valores</h2>';

        $array = [
            [
                'id' => 1,
                'nome' => 'Notebook',
                'valor' => 1000.00
            ],
            [
                'id' => 2,
                'nome' => 'TV',
                'valor' => 2000.00
            ],
            [
                'id' => 3,
                'nome' => 'Câmera',
                'valor' => 600.00
            ],
            [
                'id' => 4,
                'nome' => 'Fone',
                'valor' => 300.00
            ],
            [
                'id' => 5,
                'nome' => 'Mouse',
                'valor' => 100.00
            ]
        ];

        echo "<pre>";
        print_r ($array);
        echo "</pre>";

        echo "<pre>";
        print_r (array_column($array,'nome'));
        echo "</pre>";

        $total = array_sum(array_column($array,'valor'));

        
        

        // $total = 0;
        // foreach($array as $item){
        //     $total += $item['valor'];
        // }

        echo "<pre>";
        print_r ($total);
        echo "</pre>";

        echo '<hr>';
        echo '<h2> 7 - Variáveis com dase em textos puros</h2>';

        $text = '1|Notebook|1000.00|200';

        echo "<pre>";
        print_r ($text);
        echo "</pre>";

        $array = explode('|',$text);

        echo "<pre>";
        print_r ($array);
        echo "</pre>";

        list($id,$nome,$valor,$estoque) = $array;

        echo "<pre>";
        print_r ($id);
        echo "</pre>";

        echo "<pre>";
        print_r ($nome);
        echo "</pre>";

        echo "<pre>";
        print_r ($valor);
        echo "</pre>";

        echo "<pre>";
        print_r ($estoque);
        echo "</pre>";

        echo '<hr>';
        //--------------------------------------------------

        $text = '10Notebook AsusR$1000.00300';

        preg_match('/([0-9]+)(.*)R\$([0-9]+\.[0-9]{2})([0-9]+)/',$text,$matches);

        echo "<pre>";
        print_r ($text);
        echo "</pre>";

        echo "<pre>";
        print_r ($matches);
        echo "</pre>";

        list($id,$nome,$valor,$estoque) = array_slice($matches, 1);

        echo "<pre>";
        print_r ($id);
        echo "</pre>";

        echo "<pre>";
        print_r ($nome);
        echo "</pre>";

        echo "<pre>";
        print_r ($valor);
        echo "</pre>";

        echo "<pre>";
        print_r ($estoque);
        echo "</pre>";

    
    
    ?>


    
</body>
</html>