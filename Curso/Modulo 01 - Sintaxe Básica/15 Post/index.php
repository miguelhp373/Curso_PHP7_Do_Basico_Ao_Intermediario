<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Post - Cadastro de Produto</title>
</head>
<body>
<?php
    $Sexo = ['Masculino','Feminino'];//array para o select
?>
    <form method="post">
        <input type="email" name="email-user" id="email-user">
        <br><br>
        <input type="password" name="pass-user" id="pass-user">
        <br><br>
        <select name="Select-Gender" id="Select-Gender" placeholder="Genero">
        <option value="" disabled selected>Genero</option>
            <?php for ($i=0; $i<count($Sexo); $i++){ ?>
                <option value="<?= $Sexo[$i]; ?>"><?= $Sexo[$i]; ?></option>
            <?php }?>
        </select>
        <br><br>
        <button type="submit">Criar Conta</button>
    </form> 

    <?php
         $userEmail = filter_input(INPUT_POST,'email-user',FILTER_SANITIZE_EMAIL);
         $userPass = filter_input(INPUT_POST,"pass-user");
         $userGender = $_POST["Select-Gender"];
    
         switch($userGender){
             case 'Masculino':
                $gendeSelection = 'Masculino';
                break;
             case 'Feminino':
                $gendeSelection = 'Feminino'; 
                break;
         }
         if((isset($userEmail)) and (isset($userPass)) and (isset($userGender))){
            echo "<center>
            <h1>Cadastrado Com Sucesso!</h1>
            <br>
            <p>Email: $userEmail</p>
            <br>
            <p>Senha: $userPass</p>
            <br>
            <p>Gênero: $userGender</p>
        </center>";
    }else{
        echo '<h1>Crie Sua Conta Agora Mesmo!</h1>';
    }
    ?>
</body>
</html>