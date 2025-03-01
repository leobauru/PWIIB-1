<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <H1>IF</H1>
    <h2>Estrutura de decisão</h2>
    <p>
        A estrutura de decisão verifica se é verdadeiro faça uma coisa, 
        caso seja falso faça soutra
    </p>
    <pre>
        if($numero == 1){
            echo" verdadeiro: $numero é igual a 1";
        }else{
            echo " falso: $numero é diferente de 1";
        }
    </pre>
    <p>

        <?php
            $numero = rand(0,1);
            if($numero == 1){
                echo" verdadeiro: $numero é igual a 1";
            }else{
                echo " falso: $numero é diferente de 1";
            }
        ?>
    </p>



<pre>
    $nome = "fernando";

    if($nome == "maria"){
        
    }else if($nome == "fernando"){
        
    }else if($nome =="pedro"){
        
    }else{
        echo " nenhum nome é igual ao conteudo da variavel";
    }
</pre>

<p>

    <?php
        $nome = "df";
        // $nomes = {
            //     entidade01: "matheus";
            // }
            if($nome == "maria"){
                echo "nao";
            }else if($nome == "fernando"){
                echo "nao";
                
            }else if($nome =="pedro"){
                echo "nao";
                
            }else{
                echo " nenhum nome é igual ao conteudo da variavel <br>";
            }
    ?>
</p>




<h2>
    varios testes em um If
</h2>

<pre>
    $numero2 = 35;
    if(($numero2 > 10 && $numero2 < 50) || $numero2 == number ){
        echo " $numero2 esta entre 10 e 50.";
    }

    if($numero2 > 36 && $numero2 < 50){
        // nao sera executado
    }else{
        echo "$numero2 não está entre 36 e 50";
    }
</pre>

<?php 

$numero2 = 35;
if($numero2 > 10 && $numero2 < 50  ){
    echo " $numero2 esta entre 10 e 50. <br>";
}

if($numero2 > 36 && $numero2 < 50){
    // nao sera executado
}else{
    echo "$numero2 não está entre 36 e 50";
}

?>


<h3>Or</h3>

<p>
    o conectivo "ou" testa todas as condições e executa o código se apenas uma das condições for verdadeira. 
    Caso nenhuma condição for verdadeiro o else é executado.
</p>
<br>
<pre>
    $tell = "14998729070";
    if($tell =* "14998729070" || $tell == "14991575958"){
        echo "Aqui um dos telefone [e igual a variavel";
    }
</pre>
<p>

    Quando temos várias condições apenas uma é necessario ao usar o conectivo ao " OU " representado por dois PIPE 
    (Tecla que fica do lado do z)
</p>

<h2>Exercicio</h2>
<p>
    Crie uma variavel idade preencha com um valor e
    escreva na tela se ela pode ou não entrar em um evento
    considerando as seguintes regras:
<ul>
    <li>Menor de 18 anos: Não pode entrar.</li>
    <li>Maior ou igual a 18 e menor que 60: Pode entrar.</li>
    <li>Maior ou igual a 60: Entrada gratuita.</li>
<ul>

<?php
    $idade = rand(5,75);
    if($idade < 18){
        echo "<span>Não pode entrar.</span>";
    }else if($idade >= 18 && $idade < 60){
        echo "<span>Pode entrar.";
    }else{
        echo "Entrada gratuita.";
    }
?>

</p>


    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>