<meta charset="UTF-8">

<a href="http://localhost/hinos_espanhol/"><button>Índice</button></a>

<style>
div.a {
  font-size: 15px;
}

div.b {
  font-size: large;
}

div.c {
  font-size: 150%;
}
</style>

<?php

// hino get
$hino = $_GET['hino'];

// titulo
  require_once 'dbconnect.php';  

 $sql = "SELECT h.hino, h.titulo, h.metrica, h.descricao FROM hinos_espanhol h
 inner join estrofes_espanhol e on e.hino=h.hino
 where h.hino = $hino
 LIMIT 1
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  

  echo '<div class="c" align="center">' . $hino . ' - <b>' . $reg->titulo . '</b></div>';   
  echo '<div class="b" align="center">' . $reg->metrica . '</b></div>';   
  echo '<div class="b" align="center">' . $reg->descricao . '</b></div>';   
       
  endforeach;

  ?>
  <br>
  
  <?
  // hino
  require_once 'dbconnect.php';  

 $sql = "SELECT h.hino, linha, refrao FROM hinos_espanhol h
 inner join estrofes_espanhol e on e.hino=h.hino
 where h.hino = $hino
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  

    if ($reg->refrao == 1){ echo '<i style="color:blue">' ;}
    echo '<div class="c" align="center">' . $reg->linha . '</div>';
    if ($reg->refrao == 1){ echo '</i>' ;}
       
  endforeach;

  ?> 