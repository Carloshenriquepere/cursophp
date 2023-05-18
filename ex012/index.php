<?php 

//ENTRADA PARA FATORAÇÃO
$num = readline('Digite um número: ');

//CÁLCULO DA FATORAÇÃO
if($num > 0){
    $valor = $num;
    for($i =($valor - 1 ); $i > 0; $i--){
        $valor = $valor*$i;
    }
}else{
    $valor = 0;
}

//SAÍDA DO CÁLCULO
echo "!{$num} = {$valor}\n\n";

//------------------------------------------------------

//ENTRADA PARA TABUADA 
$num = readline("Digete um numero: ");

//CÁCULO PARA TABUADA 
for($i = 0; $i <= 10; $i++ ){

    //SAÍDA DO CÁLCULO
    echo "\n{$num} * {$i} = ".($num * $i). "\n\n";
}

//--------------------------------------------------



    
    echo "CALCULADORA\n\n";

    //ENTRADA DOS NÚMEROS 
    $num1 = readline("Digite o primeiro número: ");
    $num2 = readline("\n\nDigite o segundo número: \n\n");

    //MENÚ DA CALCULADORA
    echo "\nDigite ' + ' para adição\n";
    echo "Digite ' - ' para subtração\n";
    echo "Digite ' * ' para multiplicação\n";
    echo "Digite ' / ' para divisão\n\n";
   

    //ENTRADA DAS OPERAÇÕES 
    $opcao = readline('Digite a opção desejada: ');

    //CALCULO DA OPERAÇÃO
   switch($opcao){
    case '+':
        $resul = ($num1 + $num2);
        echo "\n\nO resuldado é: ". $resul."\n\n";
        break;
    case '-':
        $resul = ($num1 - $num2);
        echo "\n\nO resuldado é: " . $resul . "\n\n";
        break;
    case '*':
        $resul = ($num1 * $num2);
        echo "\n\nO resuldado é: " . $resul . "\n\n";
        break;
    case '/':
        $resul = ($num1 / $num2);
        echo "\n\nO resuldado é: " . $resul . "\n\n";
        break;

   }

//-------------------------------------------------------

   $num = readline('Digete um número: ');

   if($num % 2 ==0){
    echo "\n\nÉ Par";
   }else{
    echo "\nÉ Impar";
   }

?>   
