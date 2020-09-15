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
  echo '<div  style="cursor:pointer;font-size:20px;" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><span class="verseText"><span style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</span></span><span class="hightlights"  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?></span><?
?><!-- textos dos versiculo -->
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

function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    window.scrollTo(0, 0); 
    var url = location.href.split('v=');
    location.reload();
    window.location.href = url[0]+'v='+value; 

	}


// font size
var $elemento = $(".verseTextP");
var fontSize = window.localStorage.getItem('fontSize');
if (fontSize == null){
$elemento.css('font-size', 20);
}else{
$elemento.css('font-size', Number(fontSize));
}

$(document).ready(function(){
$("html, body").animate({ scrollTop: 0 }, "fast");
  // alert('top')
  return false;
});



</script>