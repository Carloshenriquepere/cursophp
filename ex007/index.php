<?php 

    //TAMANHO DA SENHA 
    $tamanho = (int)readline('Digite o tamanho da senha (entre 6 e 60): ');

    //VREFICA O TAMANHO DA SENHA
    if($tamanho < 6 || $tamanho > 60){
        die("Tamanho inválido\n\n");
    }

    //CARACTÉRES DA SENHA
    $caracteres = [];

    //MAIÚSCULAS
    if(readline('Permitir letras maiúsculas? (s/n) ') == 's'){
        $caracteres = array_merge($caracteres,range('A','Z'));
    }

     //MINÚSCULAS
     if(readline('Permitir letras minúsculas? (s/n) ') == 's'){
        $caracteres = array_merge($caracteres,range('a','z'));
    }

    //CARACTÉRES NUMÉRICOS
    if(readline('Permitir caractéres numéricos? (s/n) ') == 's'){
        $caracteres = array_merge($caracteres,range('0','9'));
    }

    //CARACTÉRES ESPECIAIS
    if(readline('Permitir caractéres especiais? (s/n) ') == 's'){
        $caracteres[] = '!';
        $caracteres[] = '@';
        $caracteres[] = '#';
        $caracteres[] = '$';
        $caracteres[] = '%';
        $caracteres[] = '¨';
        $caracteres[] = '&';
        $caracteres[] = '*';
        $caracteres[] = '_';
    }

    //VALIDAÇÃO DOS CARACTÉRES DA SENHA
    if(empty($caracteres)){
        die("Nunhem caractére defenido!\n\n");
    }

    //AJUSTA A QUANTIDADE DE CARACTÉRES 
    while(count($caracteres) < $tamanho){
        $caracteres = array_merge($caracteres,$caracteres);
    }

    //BAGUNÇA OS CARACTÉRES
    shuffle($caracteres);

    //NOVA SENHA
    $senha = implode('',array_slice($caracteres,0,$tamanho));

    echo "\nNova senha: ".$senha."\n\n";



?>