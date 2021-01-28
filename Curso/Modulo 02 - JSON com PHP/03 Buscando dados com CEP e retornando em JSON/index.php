<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localizador de Cep</title>
    <style>
        td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
    </style>
</head>
<body>
    <form method="get">
        <input type="number" name="cep" id="cep" maxlength="8">
        <button type="submit">Pesquisar</button>
    </form>
</body>
</html>

<?php
    //API ViaCep
    // https://viacep.com.br/ws/NumeroDoCep/json/

    $cep = filter_input(INPUT_GET,"cep",FILTER_SANITIZE_NUMBER_INT);
    $NewCep = file_get_contents("https://viacep.com.br/ws/".$cep."/json/");
    $LocateArray = json_decode($NewCep);
    

    if(($LocateArray!=null)&&(strlen($cep)==8)){?>
        
        <table>
            <thead>
               <tr>
                <td style="text-align: center;">Informações</td>
               </tr>
            </thead>
            <tbody>
               <tr>
                    <td>Cep</td>
                    <td><?php echo $LocateArray->cep; ?></td>
               </tr>
               <tr>
                    <td>Endereço</td>
                    <td><?php echo $LocateArray->logradouro; ?></td>
               </tr>
               <tr>
                    <td>Bairro</td>
                    <td><?php echo $LocateArray->bairro; ?></td>
               </tr>
               <tr>
                    <td>Localidade</td>
                    <td><?php echo $LocateArray->localidade; ?></td>
               </tr>
               <tr>
                    <td>Estado</td>
                    <td><?php echo $LocateArray->uf; ?></td>
               </tr>
            </tbody>
        </table>

    <?php }else{
        echo "Cep Inválido";
    }?>