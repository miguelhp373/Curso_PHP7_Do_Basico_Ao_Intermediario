<?php

function GravarArquivo(string $Text, string $FileName){
     $fp = fopen($FileName,'a+');
     fwrite($fp,$Text);
     fclose($fp);
 }
 ?>