<pre>
<?php
    $num = -8.4;

    echo "<h3>Funçao <strong>abs()</strong> - Valor Absoluto</h3>";
    echo "<strong>Valor absoluto de $num:  </strong>". abs($num)."<br>"; #valor absoluto</strong>

    echo "<hr>";

    echo "<h3>Funçao <strong>pi()</strong> - Valor de PI</h3>";
    echo "<strong>Valor de PI:  </strong>". pi()."<br>"; #valor de PI

    echo "<hr>";

    $numero = 12.43;

    echo "<h3>Funçao <strong>floor()</strong> - Arredondar valor para baixo</h3>";
    echo "<strong>Valor arredondado para baixo de $numero => </strong>". floor($numero)."<br>"; # arredonda o valor para baixo

    echo "<hr>";

    echo "<h3>Funçao <strong>ceil()</strong> - Arredondar valor pra cima</h3>";
    echo "<strong>Valor arredondado para cima de $numero => </strong>". ceil($numero)."<br>"; # arredonda o valor para cima

    echo "<hr>";

    echo "<h3>Funçao <strong>round()</strong> - Arredondar valor pra cima ou para baixo</h3>";
    echo "<h5>Acima ou igual a .5 arredonda para cima, abaixo ou igual a .4 arredonda apra baixo</h5>";
    echo "<strong>Valor arredondado para baixo ou para cima $numero => </strong>". round($numero)."<br>";


    echo "<hr>";

    echo "<h3>Funçao <strong>round()</strong> - Arredondar valor pra cima ou para baixo</h3>";
    echo "<h5>Acima ou igual a .5 arredonda para cima, abaixo ou igual a .4 arredonda apra baixo</h5>";
    echo "<h5>Mantendo 2 casas decimais. round($numero, 2)</h5>";
    echo "<strong>Valor arredondado para baixo ou para cima $numero => </strong>". round($numero,2)."<br>";


    echo "<hr>";

    echo "<h3>Funçao <strong>rand()</strong> - Exibe um número aleatório entre dois valores rand(4,9);</h3>";
    echo "<strong>Aleatório entre 4 e 9 => </strong>". rand(4,9)."<br>"; # geral um valor aleatório entre dois valores

    echo "<hr>";


    echo "<hr>";
    $lista = [10,15,80,40,15];

   
    echo "<h3>Funçao <strong>max()</strong>".' - Exibir o maior valor max($lista)</h3>';

    print_r($lista);
    echo "<br><br><strong>Maior valor da lista => </strong>". max($lista)."<br>"; # exibi o maior valor

    echo "<hr>";

    echo "<hr>";
    $lista = [10,15,80,40,15];

   
    echo "<h3>Funçao <strong>min()</strong>".' - Exibir o menor valor min($lista)</h3>';

    print_r($lista);
    echo "<br><br><strong>Menor valor da lista => </strong>". min($lista)."<br>"; # exibi o maior valor

    echo "<hr>";

?>
</pre>
