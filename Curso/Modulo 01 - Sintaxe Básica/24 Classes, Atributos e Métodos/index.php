<?php

    class Pessoa{
        public $nome;
        public $idade;

        public function falar(){
            echo $this->nome.'Falou <br>';
        }
    }

    $miguel = new Pessoa();
    $miguel-> nome = 'Miguel Henrique Pereira';
    $miguel -> idade = 18;
    var_dump($miguel);
    $miguel->falar();

?>