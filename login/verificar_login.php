<?php

    

    if(isset($_POST["email"]) && !empty($_POST["email"]) ){
      //  echo " o email é:".$_POST["email"];
    }else{
      //  echo "email não existe";
    }
    //echo " <br>";
    if(isset($_POST["senha"]) && !empty($_POST["senha"]) ){
        //echo " o senha é:".$_POST["senha"];
    }else{
        header('location: login.php?erro=Senha não pode estar em branco.');
     
    }

?>