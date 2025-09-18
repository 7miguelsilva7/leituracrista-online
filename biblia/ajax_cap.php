<?php
// connection
require_once 'dbconnect.php';

$order = $_POST['order'];
$cap = $_POST['cap'];
$version = $_POST['version'];

// textos dos versiculo
$sql = "SELECT ord, book, cap, version FROM biblias 
where ord=$order
and version='$version'
group by cap
";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
?><span style="font-size:16px;">Capítulos <?php
foreach($dados as $reg):
  if ($cap == $reg->cap){
  echo '<a style="cursor:pointer;width:20px; color:red;font-weight:bold" onClick="getText(\'' . $version .'\',' . $reg->ord . ',' . $reg->cap . ',\''. $reg->book . '\')"> ' . $reg->cap . ' </a>';
  }else{
  echo '<a style="cursor:pointer;width:20px;" onClick="getText(\'' . $version .'\',' . $reg->ord . ',' . $reg->cap . ',\''. $reg->book . '\');settitle(\''.$reg->book.'\','.$reg->cap.')"> ' . $reg->cap . ' </a>';
  }
endforeach;
?></span>

<script>
$(document).ready(function(){
  resizeDivText();
}); 


</script>