<?php
    //SHA1
    $s=sha1("Olá,mundo");
    echo$s;
    echo"<br/>";
    //MD5
    $m=md5("PHPintermediário");
    echo$m;
    echo"<br/>";
    //Base64_encode
    $b=base64_encode("criptografias");
    echo$b;
    echo"<br/>";
    echo base64_decode($b);


?>