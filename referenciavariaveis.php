<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <style>
            h2{
                font-family: arial;
                font-size: small;
                color: black;
            }
        </style>
    </head>
    <title>OPeradores de atribuição</title>
    <body>
        <div>
            <?php
            $a = 3;
            $b = $a + 1;
            $m = $a * $b;
            echo "<h2>A variável a é igual a: $a</h2>";
            echo "<h2>A variavel b é igual a $b</h2>";
            echo "<h2>Multiplicando as duas variaveis temos: $m</h2>";
            
            ?>
        </div>
    </body>
</html>