<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css">
        <style>
            h2{
                font-family: arial;
                
            }
        </style>
        <title>Exercício10a</title>
    </head>
    <body>
        <div>
            <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:0;
                switch($o){
                    case 1 : $r = ($n * 2);
                    break;
                    case 2 : $r = pow($n,3);
                    break;
                    case 3 : $r = sqrt($n); // $r = $n ^ (1,2);
                    break;
                    
                }
                echo "O resultado da operação solicitada foi $r";
            ?>
            <a href="javascript:history.go(-1)" class="btn">Voltar</a>
        </div>
    </body>
</html>