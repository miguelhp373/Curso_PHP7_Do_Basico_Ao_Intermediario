<?php

//Arrays são variaveis que Podem se inseridas Varios Valores dentro de Uma Só Variavel;

$Nomes = ['miguel','joao','steve','brian','julia','ana'];


//Array Associativo;

$Nomes2 = [
    'user1' => [
        'nome' => 'joao',
        'idade' => 19
    ],
    'user2' => [
        'nome' => 'cleiton',
        'idade' => 24
    ]
    ];

    /* echo $Nomes2['user1']['nome']; */



     //adicionando valores a array atraves do FOR

/*     for($i = 0; $i<=100; $i++){
        $arrayPush[] = $i;
    }

    for($i = 0; $i<=100; $i++){
        echo "$arrayPush[$i]<br>";
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Usuário</title>
</head>
<body>
    <select name="Nomes" id="namesselect">
        <?php for($i=0;$i<count($Nomes);$i++){ ?>
        <option value="<?php echo $Nomes[$i]; ?>"><?php echo $Nomes[$i]; ?></option>
        <?php } ?>
    </select> 
    <button onclick="enviar()">Enviar</button>
        <script>
            function enviar(){
                var show = document.querySelector('#namesselect').value;
                alert(show)
            }
        </script>
</body>
</html>