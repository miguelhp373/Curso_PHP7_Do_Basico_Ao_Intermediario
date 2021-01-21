<?php
    $nome = 'Miguel Henrique Pereira';
    echo "<h1>Funções PHP<h1>";
    echo "<hr>";
    echo "<h2 style='text-decoration:underline;'><mark>substr() </mark> //mostra a string de acordo com o parametro passado;<h2>";
    echo substr($nome,0,6);
    echo "<hr style='text-decoration:underline;'>";
    echo "<h2 style='text-decoration:underline;'><mark>strtolower()</mark>  //mostra a string toda em Minuscula;<h2>";
    echo strtolower($nome);
    echo "<hr>";
    echo "<h2 style='text-decoration:underline;'><mark>strtoupper()</mark> //mostra a string tudo em Maiscula<h2>";
    echo strtoupper($nome);
    echo "<hr>";
    echo "<h2 style='text-decoration:underline;'><mark>strip_tags()</mark>  //Remove tags html da String <h2>";
    echo strip_tags($nome);
    echo "<hr>";
    echo "<h2 style='text-decoration:underline;'><mark>str_replace()</mark>  //troca A String Desejada,com case Sensitive<h2>";
    echo str_replace('Miguel','Michael',$nome);
    echo "<h2 style='text-decoration:underline;'><mark>str_ireplace() </mark> //troca A String Desejada,sem case Sensitive<h2>";
    echo str_ireplace('miguel','Michael',$nome);
    echo "<h2 style='text-decoration:underline;'><mark>explode() </mark> // Gera um Array de A Acordo com o delimitador Informado<h2>";
    $name = explode(' ',$nome);
    echo $name[0];
    echo "<hr>";
    echo "<h2 style='text-decoration:underline;'><mark>strlen()</mark>  //Verifica o Numero de Caracteres de uma String<h2>";
    echo strlen($nome);



?>