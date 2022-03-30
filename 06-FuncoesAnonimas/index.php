<?php
    //função anônima
    $dizimo = function(float $valor){

        return $valor * 0.1;
    };

    echo $dizimo(90);

    $funcao = $dizimo;

    echo "<br><br>".$funcao(82);