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
        <title>Exercício10b</title>
    </head>
    <body>
        <div>
            <?php
            $o = isset($_GET["ds"])?$_GET["ds"]:0;
                switch($o){
                    case 2;
                    case 3;
                    case 4;
                    case 5;
                    case 6; 
                        echo 'Aula normal.';
                    break;
                    case 7;
                        echo 'Aula talvez.';
                    break;
                    case 8;
                        echo 'Aula, de jeito nenhum.';
                    break;
                default :
                    echo 'Dia inválido';
                }
                
            ?>
            <a href="javascript:history.go(-1)" class="btn">Voltar</a>
        </div>
    </body>
</html>