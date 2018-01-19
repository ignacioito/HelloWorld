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
            $atual = $_GET["aa"];
            echo "o ano atual é: $atual e o ano anterior é " . --$atual; 
            ?>
        </div>
    </body>
</html>