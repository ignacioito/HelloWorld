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
            $preco = $_GET["p"];
            echo "<br/><h2>O preço do produto é R$</h2>" . number_format($preco, 2, ",", ".");
            $preco -= $preco * 10/100;
            echo "</br><h2>Preço final com 10% de desconto: R$</h2>" . number_format($preco, 2, ",", ".");
            
            ?>
        </div>
    </body>
</html>