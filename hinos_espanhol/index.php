<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

a:link{
text-decoration: none;
}
div
{
 font-size: 20px;
 line-height: 1.9;
}

</style>
<div align="left">
<?php
// titulo
  require_once 'dbconnect.php';  
 $sql = "SELECT hino FROM hinos_espanhol h";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  
    echo '<a href="/hinos_espanhol/hino.php?hino=' . $reg->hino . '" style="font-size:16px"> ' . str_pad($reg->hino, 3, 0, STR_PAD_LEFT) . '&nbsp;&nbsp;&nbsp;&nbsp;</a>';   
       
 endforeach;
  ?> 
  </div >
