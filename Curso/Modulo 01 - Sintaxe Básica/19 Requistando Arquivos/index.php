<?php
require_once('gravar.php');
include('ler.php');


GravarArquivo('Olá Mundo','manipuladoArquivos.txt');
echo LerArquivos('manipuladoArquivos.txt');
?>