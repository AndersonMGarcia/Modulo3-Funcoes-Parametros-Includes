<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Prático - Funções</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            date_default_timezone_set('America/Sao_Paulo');

            $dataInter = date('Y/m/d');
            $dataNasc = date('d/m/Y', strtotime($dataInter));
            $diasSemana = ['Domingo', 'Segunda - Feira', 'Terça - Feira', 'Quarta - Feira', 'Quinta - Feira', 'Sexta - Feira', 'Sabado'];
            $numerodia = date('w' , strtotime($dataInter));
            echo ("Data: ".$dataNasc." </br> Dia da Semana: ". $diasSemana[$numerodia]);  
        ?>
    </div>    
</body>
</html>