<meta charset="UTF-8">
<?php
// titulo
  require_once 'dbconnect.php';  
 $sql = "SELECT hino FROM hinos_espanhol h";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  
    echo '&nbsp;&nbsp;<a href="/hinos_espanhol/hino.php?hino=' . $reg->hino . '" style="font-size:16px"> ' . str_pad($reg->hino, 3, 0, STR_PAD_LEFT) . '&nbsp;&nbsp;</a>';   
       
 endforeach;
  ?> 
