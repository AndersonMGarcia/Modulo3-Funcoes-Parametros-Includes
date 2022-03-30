<pre>
<?php
    $nomeSujo = '      Anderson            ';
    $nomeLimpo = trim($nomeSujo);

    
    # FUNÇÃO trim() - Retira os espaços da string

    echo "<h3>Função Trim - Tira os espaços da string</h3>";
    
    echo "<br>". trim($nomeLimpo);

    echo "<hr>";


    # FUNÇÃO strlen() - Conta o total de caracteres da string incluindo os espaços
    echo "<h3>FUNÇÃO strlen() - Conta o total de caracteres da string incluindo os espaços</h3>";
    

    echo '$nomeSujo = '."'      Anderson            ';"."<br>";
    echo '$nomeLimpo = trim($nomeSujo);'."<br>";

    echo "<br>Tamano da variável".' $nomeSujo: '.strlen($nomeSujo);
    echo "<br>Tamano da variável".' $nomeLimpo: '.strlen($nomeLimpo);

    echo "<hr>";


    $nome = 'FULANO DE TAL';

    # FUNÇÃO strtolower() - Transforma a string em letras minúsculas

    echo "<h3>FUNÇÃO strtolower() - Transforma a string em letras minúsculas</h3>";
    echo '$nome = '."'FULANO DE TAL';<br>";

    echo 'strtolower($nome);<br><br>';
    echo "Nome em transformado em minúsculo: ".strtolower($nome);

    echo "<hr>";
     # FUNÇÃO strtoupper() - Transforma a string em letras maiúsculas
     $nome = 'fulano de tal';

     echo "<h3>FUNÇÃO strtoupper() - Transforma a string em letras maiúsculas</h3>";
     echo '$nome = '."'fulano de tal';<br>";
 
     echo 'strtoupper($nome);<br><br>';
     echo "Nome em transformado em maiúsculo: ".strtoupper($nome);


     echo "<hr>";
     # FUNÇÃO str_replace() - Troca uma palavra ou letra por outra
     $nome = 'fulano de tal';

     echo "<h3>FUNÇÃO str_replace() - Troca uma palavra por outra</h3>";
     echo '$nome = '."'fulano de tal';<br>";
     $nomeAlterado = str_replace('fulano', 'ciclano', $nome);

     echo '$nomeAlterado = str_replace("fulano", "ciclano", $nome);'."<br><br>";


     echo "Nome alterado: ".$nomeAlterado;


     echo "<hr>";
     # FUNÇÃO substr() - Exibir uma palavra a partir do indice inicial até o indice final
     $nome = 'Fulano de Tal';

     echo "<h3>FUNÇÃO substr()</h3>";
     echo '$nome = '."'Fulano de Tal';<br>";
     
     $nomeAlterado = substr($nome, 0,4);//Exibir a palavra a partir do indice 0 até o índice 4

     echo '$nomeAlterado = substr($nome, 0,4);'."<br><br>";


     echo "Nome alterado: ".$nomeAlterado;
 
 



    
?>
</pre>
