<?php
/* 
    function ExibirNome($nome,$email = ''){
        if(isset($nome)and(isset($email))){
            echo "Olá $nome, Seu Email é $email";
        }else{
            echo 'Usuario não existe';
        }
    }
    ExibirNome('Miguel','miguelhp373@gmail.com'); */
    


    function calc($n1,$n2,$n3){
        return (($n1 * $n2)/$n3);

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= calc(2,2,4); ?></h1>
</body>
</html>