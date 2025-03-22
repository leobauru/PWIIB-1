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


    <form class="row g-3 " action="dados/salvar_dados.php" method="get">

        <!-- <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="">
        <br>
        <label for="email">Email</label>
        <input type="email" name="login" id="login" value="">
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="" >
        <br> -->
    
        <h2>Exercicio</h2>
    

        <h3> 1 - user and age </h3>
        <label for="firstname">Nome</label>
        <input type="text" name="firstname" id="firstname" value="">
        <br>
        <label for="age">idade</label>
        <input type="number" name="age" id="age" value="">

        <br>

        <h3> 1 - soma</h3>
        <label for="n1">1º numero</label>
        <input type="nember" name="n1" id="n1" value="">
        <br>
        <label for="n2">2º numero</label>
        <input type="number" name="n2" id="n2" value="">

        <br>

        <h3> 3 - name user</h3>
        <label for="nameUs">nome de usuario</label>
        <input type="text" name="nameUs" id="nameUs" value="">
        <br>


    </form>

    <form class="row g-3 " action="dados/salvar_dados.php" method="post">

        <h3> 4 - login </h3>
        <label for="nameLo">Nome</label>
        <input type="text" name="nameLo" id="nameLo" value="">
        <br>
        <label for="senhaLo">senha</label>
        <input type="password" name="senhaLo" id="senhaLo" value="">

        <br>

        <h3> 5 - produto </h3>
        <label for="num1">primei numero</label>
        <input type="number" name="num1" id="num1" value="">
        <br>
        <label for="num2">segundo numero</label>
        <input type="number" name="num2" id="num2" value="">

        <br>

        <h3> 6 - menssagem </h3>
        <label for="nameMsg">nome usuario</label>
        <input type="number" name="nameMsg" id="nameMsg" value="">
        <br>
        <label for="msg">menssagem</label>
        
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>

        <br>

        <button type="submit">Enviar</button>
    </form>


    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>