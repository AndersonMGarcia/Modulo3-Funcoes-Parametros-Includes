<?php

echo "<hr>";
# FUNÇÃO strpos() - Procura determinado caracter dentro de outra string
$nome = 'fulano de tal';

echo "<h3>FUNÇÃO strpos() - Procura determinado caracter dentro de outra string</h3>";
echo '$nome = '."'fulano de tal';<br>";

echo '$posicao = strpos($nome, "a");'."<br><br>";

$posicao = strpos($nome, 'al');

if ($posicao > 0){
    echo "Letra encontrada na posiçao : ".$posicao;
}else{
    echo "Não encontrado!";
}

#********************************************************

echo "<hr>";
# FUNÇÃO ucfirst() - Torna a primeira letra maiúscula
$nome = 'fulano de tal';

echo "<h3>FUNÇÃO ucfirst() - Torna a primeira letra maiúscula</h3>";
echo '$nome = '."'fulano de tal';<br>";

echo 'ucfirst($nome);'."<br><br>";
echo ucfirst($nome);
#********************************************************
echo "<hr>";
# FUNÇÃO ucwords() - Torna maiúscula a primeira letra de todas as palavras 
$nome = 'fulano de tal';

echo "<h3>FUNÇÃO ucwords() - Torna maiúscula a primeira letra de todas as palavras </h3>";
echo '$nome = '."'fulano de tal';<br>";

echo 'ucwords($nome);'."<br><br>";
echo ucwords($nome);

#********************************************************

echo "<hr>";
# FUNÇÃO explode() - Transforma a string em um array 
$nome = 'fulano de tal';

echo "<h3>FUNÇÃO explode() -Transforma a string em um array </h3>";
echo '$nome = '."'fulano de tal';<br>";

echo '$array = explode(" ",$nome);'."<br><br>";
$array = explode(' ',$nome);
print_r($array);

# ********************************************************

echo "<hr>";
# FUNÇÃO number_format() - Formatando números
$num = 12913;

echo "<h3>FUNÇÃO number_format() - Formatando números</h3>";
echo ' '."<br>";


echo 'echo number_format($num, 2, ",", ".");'."<br><br>";

echo "R$ ".number_format($num, 2, ',', '.');//Variavel, qtd de casas decimais, simbolo correspondente aos decimais (brasileiro ','), simbolo usado para serparar os milhares(.)






