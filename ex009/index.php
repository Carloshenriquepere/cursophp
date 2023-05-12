<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex009</title>
</head>
<body>

    <?php 
     

        date_default_timezone_set("America/Sao_Paulo");
        echo '<h1>Função date()</h1>';

        echo '<hr>';
        echo '<h2>Ano</h2>';
        $date= date('Y'); //ANO COMPLETO ('Y'), ANO IMCOMPLETO ('y')
        echo $date;

        echo '<hr>';
        echo '<h2>Mês</h2>';
        $date = date('M'); //MÊS EM STRING ('M'), MÊS EM NÚMERO('m')
        echo $date;

        echo '<hr>';
        echo '<h2>Dia</h2>';
        $date = date('D'); //DIA EM STRING ('M'), DIA EM NÚMERO('m')
        echo $date;

        echo '<hr>';
        echo '<h2>Data completa!</h2>';
        $date = date('d/M/Y'); //DATA COMPLETA 
        echo $date;


        echo '<hr>';
        echo '<h2>Horas</h2>';
        $date = date('H'); //HORAS FORMATO 12h ('h'), HORAS FORMATO 24h ('H')
        echo $date;

        echo '<hr>';
        echo '<h2>Minutos</h2>';
        $date = date('i'); //MINUTOS ('i')
        echo $date;

        echo '<hr>';
        echo '<h2>Segundos</h2>';
        $date = date('s'); //SEGUNDOS ('s')
        echo $date;

        echo '<hr>';
        echo '<h2>Horário completo!</h2>';
        $date = date('H:i:s'); //HORÁRIO COMPLETO
        echo $date;

        echo '<hr>';
        echo '<h2>Data e Horário!</h2>';
        $date = date('d/M/Y à\s H:i:s'); //DATA E HORÁRIO
        echo $date;




    ?>

    
</body>
</html>