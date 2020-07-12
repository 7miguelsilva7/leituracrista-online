<html>
    
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>



#closeDivVerses {
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
}

.naoSelecionavel {
    -webkit-touch-callout: none;  /* iPhone OS, Safari */
    -webkit-user-select: none;    /* Chrome, Safari 3 */
    -khtml-user-select: none;     /* Safari 2 */
    -moz-user-select: none;       /* Firefox */
    -ms-user-select: none;        /* IE10+ */
    user-select: none;            /* Possível implementação no futuro */
    /* cursor: default; */
}

a:link {
  text-decoration: none;
  color: black;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}

#verses {
	font-family:Verdana, Geneva, sans-serif;
	display:none;
  height: 100%;
  width: 90%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  color:#000;
  padding:3%;
  float:left;
  overflow: auto;
  background: #f0e68c;  
  /* background: white;   */
  font-size:20px;
  opacity: 0.95;
}

#interlinear {
	font-family:Verdana, Geneva, sans-serif;
	display:none;
  height: 100%;
  width: 90%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  color:#000;
  padding:3%;
  float:left;
  overflow: auto;
  background: #f0e68c;  
  /* background: white;   */
  font-size:20px;
  opacity: 0.95;
}

.btn-default {
  height: 60;
  background: transparent;
  border-style: solid;
  width:60;
  }

.btn-defaultCap {
  height: 40;
  background: transparent;
  border-style: solid;
  width:49%;
  }  

button.verses{
  width: 70;
  height: 60;
  border-style: solid;
  background: transparent;
}

@media screen and (max-width: 2000px) {
  body {
  
  margin: 100px;
  margin-top: 10px;
  }
}

@media screen and (max-width: 800px) {
  body {  
  
  margin: 50px;
  margin-top: 10px;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  body {
  
  margin: 10px;
  margin-top: 10px;
  }
}


p {
  font-size: 20px;
}

#divVersesTexts {
  font-size: 20px;


}

/* span.verse {
  font-size: 12px;
} */

span.navFooter{
  font-size:14;
}
/* css copiar texto */
.cap {
  line-height: 3;
}

a:link{
text-decoration: none;
}

.alert-box {
	padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;  
}
.success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    display: none;
}  
/* css copiar texto */
div.cap{
  columns: 50px 20;
}
</style>

</head>

<body id="noScroll">
<?php

require_once 'dbconnect.php';  

// book and cap get
$b = $_GET['b']; //book
$c = $_GET['c']; //cap
$o = $_GET['o']; //Order
$v = $_GET['v']; //Order
?>

<!-- <div align="center">
<a href="../biblia/"><button>Livros</button></a>
<a href="cap.php?o=<?php echo $o . '&b=' . $b ?>"><button>Capítulos</button></a>
</div> -->



<div align="center">
<div align="left">

<?php

echo '<title>' . $b . ' ' . $c . '</title>';
echo '<h2>('. $v .') '. $b . ' ' . $c . '</h2>';

?><br>

<?php

  // connection
  require_once 'dbconnect.php';  




// conta qtd capítulos
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= 'ARC69' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$rowcount =  $stm->rowCount();
// conta qtd capítulos




// textos dos versiculo
$sql = "SELECT book, ord, cap, sum(cap) as totalCaps, verse, text, pgrph FROM biblias 
where `version`= 'ARC69' 
and ord=$o
and cap=$c
group by `verse`";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  $totalCaps = $reg->totalCaps;
  // echo '<div style="cursor:pointer" id="divVersesTexts" ><a class="verseText" style="color:black" href="&verse='. $reg->verse .'"><sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . $reg->text . '</span></div></a></p>';

  echo '<div class="verseText" style="cursor:pointer" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');"><sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></div></a></p>';
endforeach;
?><!-- textos dos versiculo -->



<!-- div de versiculos -->
<div align="center" id="verses" class="sidenav naoSelecionavel">
  <h4>Versículos</h4>
<?php 
$sqlVerses = "SELECT book, ord, cap, sum(cap) as totalCaps, verse, text FROM biblias 
where `version`= 'ARC69' 
and ord=$o
and cap=$c
group by `verse`";  
$stmV = $PDO->prepare($sqlVerses);  
$stmV->execute();  
$verses = $stmV->fetchAll(PDO::FETCH_OBJ); 
foreach($verses as $regVerses):  
  echo '<a href="#verse' . $regVerses->verse . '"><button onclick="highlightVerse();" class="btn-default">' . $regVerses->verse . '</button></a>';
endforeach; 
?>
<br>
<br>
<br>
<br>

<div id=closeDivVerses><strong>X</strong></div>
</div>

</div>
</div>


<script>
  function book(){
  window.location.href = "../biblia/"
  }

  function cap(){
  window.location.href = "cap.php?o=<?php echo $o . '&b=' . $b ?>"
  }

  function verse(){
  window.location.href = "#"
  }

<?php 
$next = $c +1;
$back = $c -1;
?>

// navegate on caps
  function backCap(){
  window.location.href = "text.php?o=<?php echo $o . '&b=' . $b . '&c=' . $back . '&v=' . $v ?>"
  }
  
  function nextCap(){
  window.location.href = "text.php?o=<?php echo $o . '&b=' . $b . '&c=' . $next . '&v=' . $v ?>"
  }
</script>
<br>
<!-- navegate on capters -->
<div align="center">

  <?php
  if ($c > 1){
    echo '<button class="btn-defaultCap" onclick="backCap()"><< Anterior</button> ';
  }

  if ($c < $rowcount){
    echo '<button class="btn-defaultCap" onclick="nextCap()">Próximo >></button>';
  }
  ?>

</div>

<div align="right" onclick='book();'>
  
</div>

<br><br><br>

<div class="footerbackground"></div>

<div onclick='book();' class="footerback">
  <span class="navFooter">Livros</span>
</div>

<div onclick='cap();' class="indice">
  <span class="navFooter">Capítulos</span>
</div>

<div id="versiculos" class="footerup" data-toggle="modal"  data-target="#exampleModalLong">
  <span class="navFooter">Versículos</span>
</div>




<script>
// Open div of verse
$(function($){   
	$("#versiculos").click(function() {
    document.getElementById('noScroll').style.overflow = "hidden";

    $(".sidenav").css('width','100%');
		$(".sidenav").animate({
      width: "toggle"
    });
	});
})



// close div of verses
$(function($){   
	$("#verses").click(function() {
    document.getElementById('noScroll').style.overflow = "initial";
		$(".sidenav").animate({
      width: "toggle"
    });
	});
})


  

// highlightVerse
function highlightVerse(){
setTimeout(highlightVerse, 1000);
var verse = window.location.href;
var num = verse.split('#');
// alert(num[1]);
if (num[1] != null){
document.getElementById(num[1]).style.backgroundColor = "#ffffc7";
}
}



// highlightVerse
$( document ).ready(function() {
var verse = window.location.href;
var num = verse.split('#');
// alert(num[1]);
if (num[1] != null){
document.getElementById(num[1]).style.backgroundColor = "#ffffc7";
}
});


// longClick
var timer;
$('#holdBtn').on("mousedown",function(){
    timer = setTimeout(function(){
        alert("WORKY");
    },2*600);
}).on("mouseup mouseleave",function(){
    clearTimeout(timer);
});
</script>

<div id="interlinear" class="inter">
</div>

<!-- <button class="holdBtn" id="holdBtn">Teste de long click</button> -->





<!-- open div interlinear -->
<script>
$(function($){   
	$(".verseText").click(function() {

setTimeout(function(){ 
var v = 'verse' + localStorage.getItem('verseInterlinear');
// var num = v.split('#');
// alert(localStorage.getItem('verseInterlinear'));
document.getElementById(v).style.backgroundColor = "#ffffc7";
document.getElementById('noScroll').style.overflow = "hidden";

    var book='<?php echo $b ?>';
    var order='<?php echo $o ?>';
    var cap='<?php echo $c ?>';
    var verse= v.replace('verse', '');
    $("#interlinear").load("ajax.php", {"book": book, "order": order, "cap": cap, "verse": verse,});
		$(".inter").css('width','100%');
					$(".inter").animate({
					  width: "toggle"
					});
          }, 200);
  });
})


// close div interlinear
// $( "#interlinear" ).click(function() {
//   document.getElementById('noScroll').style.overflow = "initial";
//   $(".inter").css('width','90%');
// 					$(".inter").animate({
// 					  width: "toggle"
// 					});
// });
</script>