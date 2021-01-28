<?php
$Cinema = [
    "Titulo"=>"John Wick - De Volta ao Jogo",
    "Sinopse"=>"Um Assasino Procura Vingança Pelos Responsaveis Por Matarem seu Cachorro",
    "Ano"=>"2013",
    "Horarios"=>[["12:30","15:30"]],
];

$arrayToJson = json_encode($Cinema);//Trasforma array em json
echo $arrayToJson;


?>