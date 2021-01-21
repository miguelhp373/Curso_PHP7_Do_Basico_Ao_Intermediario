<?php
    //Exemplos
    //-----------------------------------------------------
    
    $Name = 'Miguel'; //String
    $Number = 123; //Int
    $NumberDecimal = 12.3; //Float ou Double
    $Boolean = True; //ou False, Boolean
    $Sexo = 'M'; //Serve Para Armazenar um Unico Caracter
    define('Nome','valor');//Constante

    //-----------------------------------------------------


?>


<?php
    $NomeCompleto = 'Miguel Henrique Pereira';
    $Sexo = 'M';
    $Salario = 2550.9055;

        echo "Seu Nome (Miguel Henrique Pereira) Tem ".strlen($NomeCompleto)." Caracters, e é uma ".gettype($NomeCompleto);
        echo "<br>";
        echo "Seu Sexo é ".$Sexo.", e a variavel é do tipo ".gettype($Sexo);
        echo "<br>";
        echo 'Seu Salário é '.number_format($Salario,2,',','.').'e a variavel é do tipo '.gettype($Salario);
        

?>