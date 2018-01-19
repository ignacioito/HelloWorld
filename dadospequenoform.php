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
            $nome = isset($_GET["nome"])?$_GET["nome"]: "[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]: "[não informado]";
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]: "[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos."
            ?>
            <button><a href="pequenoform.html" class="btn">Voltar</a></button>
        </div>
    </body>
</html>