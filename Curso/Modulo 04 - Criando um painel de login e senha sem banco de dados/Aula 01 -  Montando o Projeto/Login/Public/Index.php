<?php
    require_once('../Src/Services/UserManager/Index.php');
    require_once('../Src/Services/User.php');
    //InputUserEmailNew InputUserNameNew InputUserPassNew
    

    if(filter_input(INPUT_POST,"InputUserEmailNew",FILTER_SANITIZE_STRING)){
        echo filter_input(INPUT_POST,"InputUserEmailNew",FILTER_SANITIZE_STRING);
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Internal Styles-->
    <link rel="stylesheet" href="../Src/Styles/Login/index.css">
    <link rel="stylesheet" href="../Src/Styles/Register/index.css">

    <!--Bootstrap Styles-->
    <link rel="stylesheet" href="../Src/Styles/bootstrap/css/bootstrap.min.css">
    <!--Jquery-->
    <script src="../Src/Js/Jquery/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.register-section').hide()
        });
    </script>
</head>
<style>
    body {
        background-color: #0984e3;
    }
</style>

<body>
    <main>
        <div class="login-section">
            <h1 style="text-align: center;margin-top: 20px;color:#FFFF;">Login</h1>
            <section class="section-form">
                <form action="" method="POST">
                    <div class="mb-3" style="width: 340px;">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="InputUserEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="InputUserPass" id="exampleInputPassword1">
                    </div>
                    <button type="submit" id="LoginAccount" class="btn btn-primary">Entrar</button>
                    <span style="padding-left:7px;margin-top:10px">
                        <a href="#" onclick="
                    $('.register-section').show();
                    $('.login-section').hide();
                    $('title').html('Criar Conta');
                    ">Criar Conta</a>
                    </span>
                </form>
            </section>
        </div>


        <div class="register-section">
            <h1 style="text-align: center;margin-top: 20px;color:#FFFF;">Registrar</h1>
            <section class="section-new">
                <form action="" method="POST">
                    <div class="mb-3" style="width: 340px;">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="InputUserEmailNew" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="InputUserNameNew" id="exampleInputName1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="InputUserPassNew" id="exampleInputPassword1">
                    </div>
                    <button type="submit" id='NewAccount' class="btn btn-primary">Criar Conta</button>
                    <span style="padding-left:7px;margin-top:10px">
                        <a href="#" onclick="
                    $('.register-section').hide();
                    $('.login-section').show();
                    $('title').html('Entrar');
                    ">Voltar</a></span>
                </form>
                
            </section>
        </div>
    </main>
    <!--Bootstrap js-->
    <script src="../Src/Styles/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>