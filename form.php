<?php
    include "./nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
    <h1> Cadastros de Usuário </h1>


    <form class="row g-3 "action="salvar_dados.php" method="post">

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="">
        <br>
        <label for="email">Email</label>
        <input type="email" name="login" id="login" value="">
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="" >
        <br>


 


    
        <h2>Exercicio</h2>
    

        <h3> 1 - user and age </h3>
        <label for="firstname">Nome</label>
        <input type="text" name="firstname" id="firstname" value="">
        <br>
        <label for="age">Email</label>
        <input type="number" name="age" id="age" value="">

        <br>

        <h3> 1 - soma</h3>
        <label for="n1">Nome</label>
        <input type="nember" name="n1" id="n1" value="">
        <br>
        <label for="n2">Email</label>
        <input type="number" name="n2" id="n2" value="">

        <br>

        <button type="submit">Enviar</button>
    </form>


    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>