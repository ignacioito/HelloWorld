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
            echo "O preço do produto é: R$". number_format($preco,2,',','.'); 
            $preco = $preco - ($preco*10/100);
            echo " Com 10% de desconto fica: R$" . number_format($preco,2,',','.');
            
            ?>
        </div>
    </body>
</html>