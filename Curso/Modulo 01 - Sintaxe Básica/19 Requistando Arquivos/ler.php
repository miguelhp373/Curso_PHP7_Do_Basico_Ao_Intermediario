<?php

function LerArquivos($Text){
     $fp = fopen($Text,'r');
    $readFile =  fread($fp, filesize($Text));
    fclose($fp);
    return $readFile;
 }
?>