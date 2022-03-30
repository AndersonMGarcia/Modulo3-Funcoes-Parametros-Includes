<pre>
<?php
    $lista = ['name1', 'name2', 'name3', 'name4'];

    echo "<h3>Função count() - Conta o total de itens do array</h3>";
    
    echo '$lista = ["name1", "name2", "name3", "name4"];'."<br>";;
    echo 'count($lista);'."<br><br>";


    echo "<strong>Total de itens do array  =></strong>  ". count($lista);

    echo "<hr>";

    # --------------------------------------------------------------------------
    $lista = ["Pedro", "Paulo", "Flávia", "Elizabeth", "Maria", "Júnior"];
    $aprovados = ["Pedro", "Flávia", "Júnior", "Elizabeth"];

    echo "<h3>Função array_diff() - Gera um array com os itens da primeira lista  que não constam na segunda lista</h3>";
    
    echo '$lista = ["Pedro", "Paulo", "Flávia", "Elizabeth", "Maria", "Júnior"];'."<br>";;
    echo '$aprovados = ["Pedro", "Flávia", "Júnior", "Elizabeth"];'."<br><br>";

    $reprovados = array_diff($lista, $aprovados);

    echo '$reprovados = array_diff($lista, $aprovados);'."<br><br>";




    print_r($reprovados);

    echo "<hr>";

    # -------------------------------------------------------------------------------
    $numeros = [10,20,24,91,18];
    

    echo "<h3>Função array_filter() -Função utilizada para filtrar os itens do array</h3>";
    
    echo ' $numeros = [10,20,24,91,18];'."<br>";;
    echo ''."<br><br>";

    $filtrados = array_filter($numeros, function($item){
        
        if ($item < 30){
            return true;
        }else{
            return false;
        }
    });

    

    echo "Filtrados: <br>";

    print_r($filtrados);

    echo "<hr>";

?>
</pre>