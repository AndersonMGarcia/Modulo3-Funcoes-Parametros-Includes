<?php

//Função Arrow
/*
$dizimo = function($valor){
    return $valor * 0.1;
}; */

$dizimo = fn($valor) => $valor * 0.1; //função Arrow - faz o mesmo que a função anonima acima

$somar = fn(int $n1, int $n2 = 0) => $n1 + $n2;

echo "Percentual: ".$dizimo(150)."<br>";
echo "Soma: ".$somar(20,30)."<br>";