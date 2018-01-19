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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. ";
            if ($i >= 18){
                $v = 'já pode votar';
                $d = 'já pode dirigir.';
            } else {
                $v = 'não pode votar';
                $d = 'não pode dirigir.';
            }
            echo "Você $v e $d"
            ?>
            <button><a href="exercicioaula09a.html" class="btn">Voltar</a></button>
        </div>
    </body>
</html>