<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../bootstrap.min.css" rel="stylesheet" />

</head>
<body>
    


<form  action="verificar_login.php" method="post">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" ><?php  ?>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" class="form-control" >

    <br>
    <button type="submit">
        logar
    </button>
    <?php  
    
    if(isset($_GET["erro"]) && !empty($_GET["erro"])){
       ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET["erro"]?>
        </div>
        <?php
    }

    ?>
</form>
<script src="../bootstrap.bundle.min.js"></script>

</body>
</html>