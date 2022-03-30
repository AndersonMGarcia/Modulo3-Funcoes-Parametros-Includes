<?php
    function somar(int $n1, int $n2)    {
        $total = $n1 + $n2;
        
        return $total;
    }

    $x = 3;
    $y = 2;

    echo somar($x, $y);//Passagem de parâmetros por valor


    //----------------------------------------------------
    //--------------Passagem por Referencia---------------
    $soma = 0;
    function somar2($n1, $n2, &$total){
        $total = $n1 + $n2;
    }

    somar2($x,$y, $soma);

    echo "<br>Total: ".$soma;
?>