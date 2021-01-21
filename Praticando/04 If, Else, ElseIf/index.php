<?php

//1)Declare uma variável que receba o nome e a idade do usuário, em seguida verifique se o usuário possui ou tenha mais de 18 anos, caso sim, exiba a seguinte mensagem na tela “Olá [NOME_DO_USUÁRIO], você pode participar do projeto”, caso tenha menos que 18 anos, exiba a seguinte mensagem “Olá[NOME_DO_USUÁRIO], você não pode participar do projeto”.EX:  If(true){echo “valido”}else{ echo “inválido”;}.

//2)Declare uma variável que receba o salário de um funcionário e outra para receber o valor do reajuste, na sequencia faça o reajuste conforme mostrado a seguir:-Se o funcionário ganha menos de R$ 1200.00, faça o reajuste de R$ 300,00.-Se o funcionário ganha mais de R$ 1200.00 e menos de 1600.00, faça o reajuste de R$ 250,00.-Se o funcionário recebe mais de R$ 1600.00, faça o reajuste de R$ 200,00.

/* $infouser = ['Miguel',18];

if($infouser[1] >= 18){
    echo "Olá $infouser[1], você pode participar do projeto";
}else{
    echo "Olá $infouser[1], você não pode participar do projeto";
};
 */

 $salFunc = 100.00;
 $reajuste = 0;
 if($salFunc <= 1200.00){
    $reajuste =  $salFunc + 300.00;
 }elseif(($salFunc >1200.00)and($salFunc<=1600.00)){
    $reajuste =  $salFunc + 250.00; 
 }else{
    $reajuste =  $salFunc + 200.00; 
 }

 echo $reajuste;
 
?>