<!-- #closeInter {
  cursor:pointer;
  text-align: center;
  position:fixed;
  bottom: 0;
  width: 100%;
  margin: 0 auto;
  font-size: 40;
  color:red;
  background: #f0e68c;
  left: 50%;
  transform: translateX(-50%);
} -->



<style>
#backVerse {
  margin: auto;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 40%;
  background-color: DarkSlateBlue;
  color: white;
  text-align: center;
  font-size: 25px;
  font-weight: bold;
  cursor: pointer;
  height: 40px;
  padding-top: 5px;
}
  
#closeInter {
    margin: auto;
    position: fixed;
    /* left: 33.5%; */
    bottom: 0;
    width: 20%;
    background-color: red;
    color: white;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    cursor: pointer;
    padding-top: 5px;
    height: 40px;
    left: 50%;
    transform: translateX(-50%);    
  
  }    

#forwardVerse {
  margin: auto;
  position: fixed;
  right: 0;
  bottom: 0;
  width: 40%;
  background-color: DarkSlateBlue;
  color: white;
  text-align: center;
  font-size: 25px;
  font-weight: bold;
  cursor: pointer;
  padding-top: 5px;
  height: 40px;
  }
  
</style>

<?php


// connection
require_once 'dbconnect.php';

$order = $_POST['order'];
$book = $_POST['book'];
$cap = $_POST['cap'];
$verse = $_POST['verse'];

echo $book . ' ' . $cap . ':' . $verse . '</p>';


// conta qtd versículos
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= 'ARC69' and ord=$order
and cap = $cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$totalVerses =  $stm->rowCount();
// conta qtd capítulos

// textos dos versiculo
$sql = "SELECT ord, book, cap, verse, sum(verse) as totalVerses, text, pgrph, version FROM biblias 
where ord=$order
and cap=$cap
and verse=$verse
group by `version`
order by show_order";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  echo '</i><span id="version">(<b>' . $reg->version . '</b>)</span><span class="verse"></span><span> ' . $reg->pgrph . ' ' . $reg->text . '</span><hr>';
endforeach;
?><!-- textos dos versiculo -->
<br>

<div id=closeInter><strong>X</strong></div>

<?php 
if ($verse > 1){
  echo '<div id=backVerse><strong><<</strong></div>';
}
if ($verse < $totalVerses){
  echo '<div id=forwardVerse><strong>>></strong></div>';
}
?>

<script>

$(function($){   
	$("#backVerse").click(function() {


    var book='<?php echo $book ?>';
    var order='<?php echo $order ?>';
    var cap='<?php echo $cap ?>';
    var verse='<?php echo $verse - 1 ?>';
    $("#interlinear").load("ajax.php", {"book": book, "order": order, "cap": cap, "verse": verse,});
		// $(".inter").css('width','100%');
		// 			$(".inter").animate({
		// 			  width: "toggle"
		// 			});
  });
})

$(function($){   
	$("#forwardVerse").click(function() {

    var book='<?php echo $book ?>';
    var order='<?php echo $order ?>';
    var cap='<?php echo $cap ?>';
    var verse='<?php echo $verse + 1 ?>';
    $("#interlinear").load("ajax.php", {"book": book, "order": order, "cap": cap, "verse": verse,});
		// $(".inter").css('width','100%');
		// 			$(".inter").animate({
		// 			  width: "toggle"
    // 			});
    $("#interlinear").animate({ scrollTop: 0 }, "fast");
    
  });
})



// close div interlinear
$( "#closeInter" ).click(function() {
  document.getElementById('noScroll').style.overflow = "initial";
  $(".inter").css('width','90%');
					$(".inter").animate({
					  width: "toggle"
					});
});
</script>