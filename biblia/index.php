<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {margin: 50px;}

a:link{
text-decoration: none;
}
div
{
 font-size: 20px;
 line-height: 1.9;
}

</style>

<body>
   
<a href="#"><h1>Livros da Bíblia</h1></a>

<div align="CENTER">
<?php
// Livro
  require_once 'dbconnect.php';  
 $sql = "SELECT ord, book FROM biblias where `version`= 'ADO' group by ord order by ord";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="font-size:16px"> ' . $reg->book . '&nbsp;&nbsp;&nbsp;&nbsp;</a>';   
       
 endforeach;
  ?> 
  </div >
