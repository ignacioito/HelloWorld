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
    <title>Teste Index</title>
    <body>
        <div>
            <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<br/><h2>valores recebidos $v1 e $v2</h2>";
            echo "<br/><h2>O valor absoluto de $v1 é: </h2>". abs($v1);
            echo "<br/><h2>$v1 elevado a $v2 é: </h2>". pow($v1, $v2);
            echo "<br/><h2>A raiz quadrada de $v1 é: </h2>". sqrt($v1);
            echo "<br/><h2>o Valor arredondado da raiz de $v1 (". sqrt($v1)."<h2> e: </h2>". floor(sqrt($v1));
            echo "<br/><h2>A variável $v1 elevada a $v2 ($v1<sup>$v2</sup>) resulta em: </h2>". pow($v1, $v2); 
            echo "<br/><h2>A parte inteira de $v1 é: </h2>". intval($v1);
            echo "<br/><h2>O valor monetário de $v1 é: R$</h2> " . number_format($v1,2,",", "."); //util para formatar um número em valor monetário
            
            ?>
        </div>
    </body>
</html>