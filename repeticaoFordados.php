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
    for($c=1;$c<=10;$c++){
        echo "$c ";
  }
  echo '<br/>';
    for($c=10;$c>=1;$c--){
        echo "$c ";
    }
  echo '<br/>';
    for($c=20;$c>=0;$c-=2){
        echo "$c ";
    }
       ?>
        
    </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 