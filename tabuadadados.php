<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercício</title>
</head>
<body>
<div>
       <?php
    $v = isset($_GET["val"])?$_GET["val"]:1;
    echo "<h1>Calculando a tabuada de $v </h1>";
    $c = 1;
  while($c <= 10){
    $tab = $v * $c;
    echo "$v x $c = $tab </br>";
    $c++;
  }
       ?>
        
    </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 