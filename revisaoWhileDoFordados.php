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
    echo 'Com For: </br>';
    $v = isset($_GET["val"])?$_GET["val"]:1;
    for($c = 1;$c<=10;$c++){
        $r = $v * $c;
        echo "$v x $c = $r";
        echo '<br/>';
  }
  echo '</br>';
  echo 'Com While: </br>';
   $c = 1;
    while($c<=10){
        $r = $v * $c;
        echo "$v x $c = $r </br>";
        $c++;
    }
    echo '</br>';
    echo 'Com Do/While: </br>';
    $c = 1;
    do{
        $r = $v * $c;
        echo "$v x $c = $r</br>";
        $c++;
    }while($c<=10)
       ?>
        
    </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 