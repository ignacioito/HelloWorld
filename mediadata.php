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
            $nota1 = isset($_GET["Nota1"])?$_GET["Nota1"]: "[não informado]";
            $nota2 = isset($_GET["Nota2"])?$_GET["Nota2"]: "[não informado]";
            $media = $nota1 + $nota2 / 2;
            echo "Sua media é $media.";
            if ($media < 5){
                $situacao = "Reprovado(a)";
            }
            elseif ($media >= 5 && $media < 7){
                $situacao = "de recuperação.";
            }
            else {
                $situacao = "Aprovado.";
            }
            echo "Você está $situacao";
                
               
                
            
            
            ?>
            <button><a href="media.html" class="btn">Voltar</a></button>
        </div>
    </body>
</html>