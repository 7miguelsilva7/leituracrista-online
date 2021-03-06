<?php
$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARF";
  // setcookie("version", 'ARA', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}
?>

<html>
    
<head>
<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>

::-moz-selection { /* Code for Firefox */
  color: red;
  background: #ffffc7;
}

::selection {
  color: red;
  background: #ffffc7;
}

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
  .btn-container
  {
    display:none;
  }
  #resetFont
  {
    display:none;
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
.btn-container
            {
                position: fixed;
                right: 10px;
                top: 10px
                
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
echo '<a href="#" style="color:blue" data-toggle="modal" data-target="#exampleModal"><h2>('. $version .')</a> ' . $b . ' ' . $c . '</h2>';
echo '<title>' . $b . ' ' . $c . '</title>';


?><br>
<?php

  // connection
  require_once 'dbconnect.php';  




// conta qtd capítulos
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= '$version' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$rowcount =  $stm->rowCount();
// conta qtd capítulos




// textos dos versiculo
$sql = "SELECT book, ord, cap, sum(cap) as totalCaps, verse, abr, text, pgrph FROM biblias 
where `version`= '$version' 
and ord=$o
and cap=$c
group by `verse`";  
$stm = $PDO->prepare($sql);
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  $totalCaps = $reg->totalCaps;
  // echo '<div class="verseText"  style="cursor:pointer" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');"><sup>'. $reg->abr . ' ' . $reg->cap . ':</sup><sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></div></a></p>';
  echo '<div  style="cursor:pointer" class="hightlights divVersesTexts" id="verse'. $reg->verse .'" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><sup class="verseText"><b style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</b></sup><span >' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?>
<div align="right" class="btn-container">
        <button name="increase-font" id="btnAumentar" title="Aumentar fonte">A <sup>+</sup></button></p>
        <button name="decrease-font" id="btnDiminuir" title="Diminuir fonte">A <sup>-</sup></button></p>
        <img id="resetFont" style="width:30px;cursor:pointer" title="Restaurar fonte" src="img/reset.png" alt="Restauar Fonte"></p>
        <a onclick="localStorage.setItem('layoutBar',1)" href="text_sidebar.php?o=<?php echo $o?>&b=<?php echo $b?>&c=<?php echo $c?>&v=<?php echo $v?>"><img id="sidebar" style="width:30px;cursor:pointer" title="Layout Sidebar" src="img/sidebar.png" alt="Layout Sidebar"></a>

</div>
<!-- textos dos versiculo -->

<!-- div de versiculos -->
<div align="center" id="verses" class="sidenav naoSelecionavel">
  <h4>Versículos</h4>
<?php 
$sqlVerses = "SELECT book, ord, cap, sum(cap) as totalCaps, verse, text FROM biblias 
where `version`= '$version' 
and ord=$o
and cap=$c
group by `verse`";  
$stmV = $PDO->prepare($sqlVerses);  
$stmV->execute();  
$verses = $stmV->fetchAll(PDO::FETCH_OBJ); 
foreach($verses as $regVerses):  
  echo '<a href="#verse' . $regVerses->verse . '"><button onclick="localStorage.setItem(\'verseInterlinear\',\''. $regVerses->verse .'\');highlightVerseText();" class="btn-default">' . $regVerses->verse . '</button></a>';
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


  

// highlightVerse ao clicar no numero do verso
// function highlightVerse(){
// setTimeout(highlightVerse, 1000);

// $(".hightlights").css("background-color", "");
// // setTimeout(highlightVerse, 1000);
// var v = 'verse' + localStorage.getItem('verseInterlinear');
// // color = document.getElementById(v).style.backgroundColor;
// // if (color != ''){
// // document.getElementById(v).style.backgroundColor = "";
// // }else{
//   document.getElementById(v).style.backgroundColor = "#ffffc7";

// }

// Ao clicar no texto do versículo
function highlightVerseText(){
$(".hightlights").css("background-color", "");
// setTimeout(highlightVerse, 1000);
var v = 'verse' + localStorage.getItem('verseInterlinear');
// color = document.getElementById(v).style.backgroundColor;
// if (color != ''){
// document.getElementById(v).style.backgroundColor = "";
// }else{
  document.getElementById(v).style.backgroundColor = "#ffffc7";
  
// }
// alert(teste);
}

// highlightVerse and fontSize
$( document ).ready(function() {
var fontSize = localStorage.getItem('fontSize');
var $elemento = $("body .verseTextP");
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Escolha a versão para leitura clicando nos links abaixo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      (<a style="color:blue" href="#"><span onClick="SetCookie('version','ARC69','365')" style="cursor:pointer"><b>ARC69</b></span></a>) Edição Revista e Corrigida (1898, 1969).
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','ARC95','365')" style="cursor:pointer"><b>ARC95</b></span></a>) Edição Revista e Corrigida (1898, 1995). 
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','ARF','365')" style="cursor:pointer"><b>ARF</b></span></a>) Edição Corrigida e Revisada Fiel ao Texto Original.
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','AIB','365')" style="cursor:pointer"><b>AIB</b></span></a>) Edição Revisada pela Imprensa Bíblica Brasileira em 1967.
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','TB','365')" style="cursor:pointer"><b>TB</b></span></a>) Edição Bíblica Britânica.
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','ARA','365')" style="cursor:pointer"><b>ARA</b></span></a>) Edição Revista e Atualizada (1959, 1993).
 <p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','JER','365')" style="cursor:pointer"><b>JER</b></span></a>) Edição de Jérusalem.
 <p></p> 
(<a style="color:blue" href="#"><span onClick="SetCookie('version','VC','365')" style="cursor:pointer"><b>VC</b></span></a>) Edição Versão Católica (1959)
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','JND','365')" style="cursor:pointer"><b>JND</b></span></a>) John Nelson DARBY.
<p></p>
(<a style="color:blue" href="#"><span onClick="SetCookie('version','KJV','365')" style="cursor:pointer"><b>KJV</b></span></a>) King James Version.      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




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
          $("#interlinear").animate({ scrollTop: 0 }, "fast");

          }, 200);
  });
})

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


var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $reset = $("#resetFont");
var $elemento = $("body .verseTextP");

function obterTamnhoFonte() {
  return parseFloat($elemento.css('font-size'));
}

$btnAumentar.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() + 1);
  localStorage.setItem('fontSize', obterTamnhoFonte() + 1);
});

$btnDiminuir.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() - 1);
  localStorage.setItem('fontSize', obterTamnhoFonte() - 1);
});

$reset.on('click', function() {
  $elemento.css('font-size', 20);
  localStorage.setItem('fontSize', 20);
});

// close div interlinear
// $( "#interlinear" ).click(function() {
//   document.getElementById('noScroll').style.overflow = "initial";
//   $(".inter").css('width','90%');
// 					$(".inter").animate({
// 					  width: "toggle"
// 					});
// });





// RESOLVER SCROLL AO CLICAR EM UMA ANCORA
// Aqui nós estaremos realizando o scroll da página para 45px acima
// de onde ela está atualmente
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 28);
  }
}

// Aqui estou adicionando um listener à todos elementos <a> que
// redirecionam para algum link que comece com #. Você pode criar uma 
// classe ou aplicar à elementos específicos.
document.querySelectorAll('a[href^="#"').forEach(el => {
  el.addEventListener("click", function() {
  
    window.setTimeout(function() {
      // O clique é capturado antes da mudança do #, então
      // o timeout faz com que esse código seja executado
      // apenas após a rolagem do redirecionamento ser executada
      offsetAnchor();
    }, 0);

  });
})

// Definimos o offset inicial caso a página aberta já esteja indo para um #elemento
window.setTimeout(offsetAnchor, 0);



$(document).keypress(function(event){
// navega por versículo com highlight avança
if (String.fromCharCode(event.which) == ">") {
$('.hightlights').css('background-color', '');
var verseStr = localStorage.getItem('verseInterlinear');
var verseNUmber =  Number(verseStr)+1
// alert(verseNUmber)
localStorage.setItem('verseInterlinear', verseNUmber)
var v = 'verse' + verseNUmber;
color = document.getElementById(v).style.backgroundColor;
if (color != ''){
document.getElementById(v).style.backgroundColor = '';
}else{
  document.getElementById(v).style.backgroundColor = '#ffffc7';

      // navega para versículo
      $('html,body').animate({
  scrollTop: $("#verse" + verseNUmber).offset().top
  }, 'fast');
  // scroll depois da barra top
  var marginTop = $("#Caps").height()+50;
  $('html, body').animate({scrollTop: '+=-'+marginTop+'px'}, 'fast');

}}

// navega por versículo com highlight volta
if (String.fromCharCode(event.which) == "<") {
$('.hightlights').css('background-color', '');
var verseStr = localStorage.getItem('verseInterlinear');
var verseNUmber =  Number(verseStr)-1
// alert(verseNUmber)
localStorage.setItem('verseInterlinear', verseNUmber)
var v = 'verse' + verseNUmber;
color = document.getElementById(v).style.backgroundColor;
if (color != ''){
document.getElementById(v).style.backgroundColor = '';
}else{
  document.getElementById(v).style.backgroundColor = '#ffffc7';

      // navega para versículo
      $('html,body').animate({
  scrollTop: $("#verse" + verseNUmber).offset().top
  }, 'fast');
  // scroll depois da barra top
  var marginTop = $("#Caps").height()+50;
  $('html, body').animate({scrollTop: '+=-'+marginTop+'px'}, 'fast');
  
}}
});  
</script>

