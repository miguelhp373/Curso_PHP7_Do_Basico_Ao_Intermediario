<?php
    //funcao com parametros, utilizando variaveis de fora do escopo, e as alterando;

    $salario = 1330.90;
    $ajusteSalarial = 0;

        function AjustarSalario($sal, &$ajusteSalarial){
            $ajusteSalarial = 300.00;
            return($sal + $ajusteSalarial);
        }

        $saldoFinal = AjustarSalario($salario, $ajusteSalarial);
        echo $saldoFinal;



?>