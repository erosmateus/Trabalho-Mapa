<?php
    include("dados.php");
    //var_dump($tutoriais)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MAPA</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <section>
<h1><p>Marmitas dona Rita <img src="img/a.png" width="3%" alt="a" height="3%"></p></h1> 
</section>


<?php

    foreach($tutoriais as $key => $value){
        
        
   ?> 
    <article>
       <a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
       <h2><?=$value['titulo'];?></h2>
       <p><?=substr($value['descricao'], 0, 150);?></p>
    </article>
   <?php 

    }
?>

<section>
<h1><p>Obrigado Pela visita!</p> <p>Eros Mateus Zapchau </br> 22214156-5</p></h1> 
</section>
</html>
</body>

    
