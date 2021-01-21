<?php
date_default_timezone_set('America/Sao_Paulo');//Pega A Localização de Sao Paulo e Seu Horario;
    echo date('d/m/y');// Mostra A (Data/Mes/Ano);
    echo("<br>");
    echo date('Y-m-d  h:i:s');//Formato que Se Passa Para O MySql, que é o padão inglês;
    echo("<br>");
    echo date('h:i:s')//Mostra a (Hora:Minutos:Segundos);


?>
