<?php
    $jsonStr = '{"Titulo":"John Wick - De Volta ao Jogo","Sinopse":"Um Assasino Procura Vingan\u00e7a Pelos Responsaveis Por Matarem seu Cachorro","Ano":"2013","Horarios":["12:30","15:30"]}';
    $arrFilme = json_decode($jsonStr);

    echo "<p>Titulo: ".$arrFilme->Titulo."</p>";
    echo "<p>Sinopse: ".$arrFilme->Sinopse." </p>";
    echo "<p>Ano: ".$arrFilme->Ano." </p>";
    echo "<p>Horários: </p>";

    for($i=0; $i < count($arrFilme->Horarios); $i++){
        echo "<p>".$arrFilme->Horarios[$i]." </p>";
    }

?>