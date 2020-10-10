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
?><h2 id=""><?php echo '(<a style="cursor:pointer" id="myBtn">' . $version . '</a>) ' . $book?></h2> <span style="font-size:17px;"><?
foreach($dados as $reg):
  echo '<div  style="cursor:pointer;font-size:20px;" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><span onclick="interlinear(' . $reg->ord . ',\'' . $reg->book . '\',' . $reg->cap . ',' . $reg->verse . ');" class="verseText" style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</span><span class="hightlights"  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?></span><?
?><!-- textos dos versiculo -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// font size
var $elemento = $(".verseTextP");
var fontSize = window.localStorage.getItem('fontSize');
if (fontSize == null){
$elemento.css('font-size', 20);
}else{
$elemento.css('font-size', Number(fontSize));
}

var verse = window.location.href;
var num = verse.split('#');
// alert(num[1]);
if (num[1] != null){
document.getElementById(num[1]).style.backgroundColor = "#ffffc7";
}


$(document).ready(function(){

// verifica se vem de busca
var verse = localStorage.getItem('verse');
if (verse != ''){
    // navega para versículo
    $('html,body').animate({
    scrollTop: $("#verse" + verse).offset().top
    }, 'fast');
  // scroll depois da barra top
  var marginTop = $("#Caps").height()+30;
  $('html, body').animate({scrollTop: '+=-'+marginTop+'px'}, 'fast');
  // destaca versículo
  var v = 'verse' + verse;
  document.getElementById(v).style.backgroundColor = '#ffffc7';

  localStorage.setItem('verse', '');
 

  }else{
    $("html, body").animate({ scrollTop: 0 }, "fast");

  }
  return false;


});

// renomear titulo da página
function settitle(b, c){
  
  document.title = b + ' ' + c
}
</script>