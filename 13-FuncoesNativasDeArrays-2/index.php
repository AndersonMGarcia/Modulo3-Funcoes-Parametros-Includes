<pre>
<?php
    $num = [10,20,24,91,18];

    echo "<h3>Função array_pop() - Remove o último item do array</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'array_pop($num);'."<br>";

    array_pop($num);

    echo "<br><br>";

    print_r($num);

    echo "<hr>";


    $num = [10,20,24,91,18];

    echo "<h3>Função array_shift() - Remove o primeiro item do array</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'array_shift($num);'."<br>";

    array_shift($num);

    echo "<br><br>";

    print_r($num);

    echo "<hr>";


    $num = [10,20,24,91,18];

    echo "<h3>Função in_array() - Verifica se determinado item existe no array</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'if (in_array(91, $num)){'."<br>";
    echo '    echo "Existe";'."<br>";
    echo '}else{'."<br>";
    echo '    echo "Não existe";'."<br>}";
    

    echo "<br><br>Resposta: ";
    if (in_array(91,$num)){
        echo "Existe";
    }else{
        echo "Não existe";
    }


    echo "<hr>";

    $num = [10,20,24,91,18];

    echo "<h3>Função array_search() - Retorna se existe determinado item do array e sua posição</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo '$pos = array_search(18, $num);'."<br>";

    $pos = array_search(18, $num);

    echo "Posição: ". $pos;



    echo "<hr>";

    $num = [10,20,24,91,18];

    echo "<h3>Função sort() - Organiza em ordem crescente os itens do array</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'sort($num);'."<br><br>";

   sort($num);

   echo "Array ordenado: <br><br>";

    print_r($num);



    echo "<hr>";

    $num = [10,20,24,91,18];

    echo "<h3>Função rsort() - Organiza em ordem decrescente os itens do array</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'rsort($num);'."<br><br>";

   rsort($num);

   echo "Array ordenado: <br><br>";

    print_r($num);




    echo "<hr>";

    $num = [10,20,24,91,18];

    echo "<h3>Função asort() - Organiza em ordem crescente os itens do array sem alterar a chave</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'asort($num);'."<br><br>";

   asort($num);

   echo "Array ordenado: <br><br>";

    print_r($num);






    echo "<hr>";

    $num = [10,20,24,91,18];

    echo "<h3>Função arsort() - Organiza em ordem decrescente os itens do array sem alterar a chave</h3>";

    echo '$num = [10,20,24,91,18];'."<br><br>";

    echo 'arsort($num);'."<br><br>";

   arsort($num);

   echo "Array ordenado: <br><br>";

    print_r($num);
    



    echo "<hr>";

    $nomes = ['Fulano','de','Tal'];

    

    echo "<h3>Função implode() - Junta os itens do array formando uma string</h3>";


    echo '$nomes = ["Fulano", "de", "Tal"];'. "<br><br>";

    echo '$name = implode(" ", $nomes);'."<br><br>";

    $name = implode(' ', $nomes);

    echo "Resultado = ".$name."<br><br>";

   

    

    

?>
</pre>