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
            $ano = isset($_GET["ano"])?$_GET["ano"]: "[não informado]";
            $idade = date("Y") - $ano;
            echo "Sua idade é $idade.";
            if ($idade >= 18){
                $TipoVoto = "Vota";
            }
            elseif (($idade >= 16 && $idade < 18) || ($idade > 65)){
                $TipoVoto = "Voto Opcional";
            }
            else {
                $TipoVoto = "Voto Obrigatório.";
            }
            echo " Para essa idade, $TipoVoto";
                
               
                
            
            
            ?>
            <button><a href="maioridade.html" class="btn">Voltar</a></button>
        </div>
    </body>
</html>