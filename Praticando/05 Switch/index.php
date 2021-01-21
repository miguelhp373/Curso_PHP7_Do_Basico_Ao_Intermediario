<?php

//1)Declare uma variável responsável por armazenar o dia da semana, começando de 1 (segunda) até 7 (domingo), por exemplo, 3 que corresponde a quarta. Verifique qual o valor da variável e exiba o dia por extenso na tela com base no valor da variável
date_timezone_get('America/Sao_Paulo');

$WeekDay = 8;

switch ($WeekDay) {
    case 1:
        $day = 'Hoje é segunda';
        break;
    case 2:
        $day = 'Hoje é Terça';
    case 3:
        $day = 'Hoje é Quarta';
        break;
    case 4:
        $day = 'Hoje é Quinta';
        break;
    case 5:
        $day = 'Hoje é Sexta';
        break;
    case 6:
        $day = 'Hoje é Sábado';
        break;
    case 7:
        $day = 'Domingo';
        break;
    default;
        $day = 'Dia Não Existente';
}

echo "$day";
