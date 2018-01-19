<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        
    </head>
    <title></title>
    <body>
        <div>
            <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<br/>valores recebidos $n1 e $n2";
            echo "<br/>As variáveis $n1 e $n2 somadas resultam em: ". ($n1 + $n2);
            echo "<br/>As variáveis $n1 e $n2 subtraídas resultam em: ". ($n1 - $n2);
            echo "<br/>As variáveis $n1 e $n2 multiplicadas resultam em: ". ($n1 * $n2);
            echo "<br/>As variáveis $n1 e $n2 divididas resultam em: ". ($n1 / $n2);
            echo "<br/>As variáveis $n1 e $n2 móduladas resultam em: ". ($n1 % $n2);            
            ?>
        </div>
    </body>
</html>