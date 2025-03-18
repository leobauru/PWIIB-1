<?php
    include "./nav.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<nav style="overflow-x:hidden" >

<h1>For</h1>

<p>
    for é estrutura de repetição. Existem 3 configurações para a estrutura de reperição funcionar:
    
    <ol>
        <li>Variável de controle</li>
        <li>Condição de finalização</li>
        <li>Incremento de variavel de controle</li>
    </ol>
        <pre>
            for($i = 0; $i < 10;$i++){
                echo "indice $i  ";
            }
        </pre>
    <?php
        for($i = 0; $i <= 10000;$i++){    
            $s = $i * 2;
            echo " $s -- ";
        }
    ?>
</p>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>