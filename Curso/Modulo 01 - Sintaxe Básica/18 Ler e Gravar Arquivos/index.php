<?php

function GravarArquivo(string $Text, string $FileName){
     $fp = fopen($FileName,'a+');
     fwrite($fp,$Text);
     fclose($fp);
 }
 GravarArquivo('Olá Mundo','manipuladoArquivos.txt');


 function LerArquivos($Text){
     $fp = fopen($Text,'r');
    $readFile =  fread($fp, filesize($Text));
    fclose($fp);
    return $readFile;
 }

 echo LerArquivos('manipuladoArquivos.txt')

?>