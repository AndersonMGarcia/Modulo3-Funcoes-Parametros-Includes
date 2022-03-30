<?php

 # Função Recursiva - Executa ela mesma internamente

    function dividir($num){
        $metade = $num / 2;

        echo $metade."<br>";

        if (round($metade) > 0){
            
            dividir($metade);# usando a função novamente
        }
    }

    echo dividir(100);
 
 