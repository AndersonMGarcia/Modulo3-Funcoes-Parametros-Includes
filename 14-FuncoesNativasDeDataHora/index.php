<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas de Data Hora com PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    
        <?php
            echo "<h3>Formatos de Data e Hora</h3>";

            echo "<strong>".'date("d/m/Y")'.":   </strong>";
            echo date('d/m/Y')."<br>";
            echo "<strong>".'date("d/m/y")'.":   </strong>";
            echo date('d/m/y')."<br>";
            echo "<strong>".'date("d/M/Y")'.":   </strong>";
            echo date('d/M/Y')."<br>";
            echo "<strong>".'date("D/M/y")'.":   </strong>";
            echo date('D/M/y')."<br>";
            echo "<strong>".'echo date("d/m/Y H:i:s")'.":   </strong>";
            echo date('d/m/Y H:i:s')."<br>";
            
            
            echo "<hr>";
            echo "<h3>Convertendo Formato Internacional para Brasileiro</h3>";
            echo "<strong>".'date("Y/m/d")'.":   </strong>";
            

            $data = date('Y/m/d');

            echo $data."  - Formato Internacional<br>";
            echo "<strong>Convertendo:  </strong><br>".'date("d/m/Y", strtotime($data));'."   =>   ";
            echo date('d/m/Y', strtotime($data));

            echo "<hr>";
            
        ?>
        <a href="https://www.php.net/manual/pt_BR/function.date.php">Manual de Referência do PHP</a>
    </div>    
</body>
</html>