<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <style>
            h2{
                font-family: arial;
                
            }
        </style>
    </head>
    <title></title>
    <body>
        <div>
            <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2) / 2;
            
            echo "<h2>Primeira nota: $nota1, segunda nota $nota2. Então você está </h2>". (($m>=7) ? "APROVADO":"REPROVADO");
            

            
            ?>
        </div>
    </body>
</html>