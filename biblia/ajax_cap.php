<?php

// connection
require_once 'dbconnect.php';

$order = $_POST['order'];
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
?><span style="font-size:17px;">Capítulos <?
foreach($dados as $reg):
  echo '<a style="cursor:pointer;width:20px" onClick="getText(\'' . $version .'\',' . $reg->ord . ',' . $reg->cap . ',\''. $reg->book . '\')"> ' . $reg->cap . ' </a>';
endforeach;
?></span>

<script>
$(document).ready(function(){
  resizeDivText();
}); 
</script>