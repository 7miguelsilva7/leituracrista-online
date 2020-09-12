<?php

// connection
require_once 'dbconnect.php';

$version = $_POST['version'];
$order = $_POST['order'];
$book = $_POST['book'];
$cap = $_POST['cap'];

// textos dos versiculo
$sql = "SELECT book, ord, cap, verse, abr, text, pgrph, version FROM biblias 
where version='$version'
and ord= $order
and cap= $cap
";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
?><h2 id=""><?php echo '(' . $version . ') ' . $book?></h2> <span style="font-size:17px;"><?
foreach($dados as $reg):
  echo '<div  style="cursor:pointer;font-size:20px;" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><span class="verseText"><span style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</span></span><span class="hightlights"  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?></span><?
?><!-- textos dos versiculo -->
<br>
<br>
<br>