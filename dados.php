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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raiz de $valor é: ". number_format($rq, 2);
            ?>
            <a href="integracaohtml.html">Voltar</a>
        </div>
    </body>
</html>