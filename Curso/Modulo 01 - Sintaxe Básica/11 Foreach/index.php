<?php
/*     $array = [
        '1' => 'maça',
        '2' => 'pera',
        '3' => 'melancia',
        '4' => 'banana'
    ];

    foreach($array as $key => $items){
        echo "chave: $key => Valor: $items <br>";
    } */


    $Usuarios = [
        'user1' => [
            'nome' => 'joao',
            'id' => 87681387
        ],
        'user2' => [
            'nome' => 'cleiton',
            'id' => 235134826
        ]
        ];


        foreach($Usuarios as $user){
            foreach($user as $key => $indice){
                echo "$key : $indice  <br> ";
            }
            echo "<br><br>";
        }


?>