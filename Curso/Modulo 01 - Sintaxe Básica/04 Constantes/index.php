<?php

//Variavel constante é uma variavel que não sofre alteração durante o programa

define('min',17);
define('max',45);

$idade = 13;

if(($idade >= min)and($idade<=max)){
    echo 'Acesso Liberado';
}else{
    echo 'Acesso Negado';
}

?>