<?php
    class Newsletter{
        public function CadastrarEmail($email){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                throw new Exception("Este Email é Invalido");
            }else{
                echo'Cadastrado Com Sucesso';
            }
        }

    }

    $newsletter = new Newsletter();

    try{
        $newsletter->CadastrarEmail("miguel@");
    }catch(Exception $ex){
        echo $ex->getMessage();
    }   
    


?>