<?php

// connection
require_once 'dbconnect.php';

$order = $_POST['order'];
$book = $_POST['book'];
$cap = $_POST['cap'];
$verse = $_POST['verse'];

echo $book . ' ' . $cap . ':' . $verse . '</p>';


// textos dos versiculo
$sql = "SELECT ord, book, cap, verse, text, pgrph, version FROM biblias 
where ord=$order
and cap=$cap
and verse=$verse
group by `version`
order by show_order";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  echo '(<b>' . $reg->version . '</b>)<span class="verse"></span><span> ' . $reg->pgrph . $reg->text . '</span><hr>';
endforeach;
?><!-- textos dos versiculo -->
<br>
<div id=closeInter><strong>X</strong></div>
<script>

// close div interlinear
$( "#closeInter" ).click(function() {
  document.getElementById('noScroll').style.overflow = "initial";
  $(".inter").css('width','90%');
					$(".inter").animate({
					  width: "toggle"
					});
});
</script>