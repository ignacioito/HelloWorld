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
            $nasc = $_GET["x"];
            $idade = 2017 - $nasc;
    
            echo "<h2>Se a minha idade é $idade então estou </h2>". (($idade>=18 and $idade<=65) ? "APTO":"NÃO APTO");

            
            ?>
        </div>
    </body>
</html>