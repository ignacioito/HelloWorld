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
            if ($i < 16){
                $v = "Não pode votar ";
                $d = "e não pode dirigir também.";
            } else {
                if ($i >= 16 && $i < 18){
                    $v = "O seu voto é opcional ";
                    $d = "mas não pode dirigir ainda.";
                }
                else {
                    $v = "Pode votar ";
                    $d = "e pode dirigir também.";
                }
            }
            echo "$v $d";
            ?>
            <button><a href="exercicioaula09b.html" class="btn">Voltar</a></button>
        </div>
    </body>
</html>