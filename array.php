<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">

    <h1>array</h1>
    <p>
        São variaveis que podem guardar uma lista de valores
        identificados por indice ou chave.
    </p>

    <pre>
        $frutas = ["banana", "Maça", "Abacaxi", 10, true, array()];
    
    </pre>

    <?php
        // $frutas = ["banana", "Maça", "Abacaxi"];
        // // echo " <br>$frutas[1] ";

        // for($i = 0; $i < count($frutas);$i++){
        //     echo " <br>$frutas[$i] - $i ";
        // }

        // echo "<br>";

        // array_push($frutas, "laranja");
        // for($i = 0; $i < count($frutas);$i++){
        //     echo " <br>$frutas[$i] - $i ";
        // }  


        // echo "<br>";

        // array_push($frutas, rand(1,75));
        // for($i = 0; $i < count($frutas);$i++){
        //     $ale = rand(1,5);
        //     echo " <br>$frutas[$ale] - $ale ";
        // }  







        

        $B = [];
        $I = [];
        $N = [];
        $G = [];
        $O = [];

        for($i = 0; $i < 5;$i++){
            do{
                $B[$i] = rand(1,15) ;
            }while($B[$i] != $B[$i]);
        }

        for($i = 0; $i < 5;$i++){
            $I[$i] = rand(16,30) ;
        }

        for($i = 0; $i < 5;$i++){
            $N[$i] = rand(31,45) ;
        }

        for($i = 0; $i < 5;$i++){
            $G[$i] = rand(46,60) ;
        }

        for($i = 0; $i < 5;$i++){
            $O[$i] = rand(61,75) ;
        }
    
    ?>

    <table class="table" border="5">
        <tr>
            <td>B</td>
            <td>I</td>
            <td>N</td>
            <td>G</td>
            <td>O</td>
        </tr>
        <?php
            for($i = 0; $i < 5;$i++){
                echo"<tr>";
                
                echo"<td> $B[$i] </td>";
                echo"<td> $I[$i] </td>";
                echo"<td> $N[$i] </td>";
                echo"<td> $G[$i] </td>";
                echo"<td> $O[$i] </td>";
                

                echo"<tr>";
            }
        ?>

    </table>

    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>