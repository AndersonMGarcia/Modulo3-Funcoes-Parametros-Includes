<?php
    function somar($n1 = 0, $n2 = 0, $n3 = 0){//valores padrões na funçao
        return $n1 + $n2 + $n3;
    }

    echo "Total = " .somar(15,3);

    function subtrair(int $n1 = 0, int $n2 = 0){//definindo o tipo do parâmetro
        return $n1 - $n2;
    }
?>