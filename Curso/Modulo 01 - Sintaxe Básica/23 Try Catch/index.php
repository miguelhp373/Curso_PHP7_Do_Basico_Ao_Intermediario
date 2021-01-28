<?php
    function ConnectionDb(){
        $db = new PDO("mysql:host=localhost;dbname=SystemUsers;charset=utf8","root","");
        return $db;
    }

    try{//ele tenta se conectar ao banco
        ConnectionDb();
    }catch(Exception $ex){//se ocorrer um erro ele executa essa mensagem, inves de aparecer o erro na pagina
        echo 'Nao Foi possivel conectar ao banco de dados <br>';
        echo "Mensagem:".$ex->getMessage()."<br>";
        echo "Linha:".$ex->getLine()."<br>";
        echo "Arquivo:".$ex->getFile()."<br>";
    }

?>