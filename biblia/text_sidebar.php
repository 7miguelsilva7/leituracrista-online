<!DOCTYPE html>


<?php
require_once 'dbconnect.php';  

$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARF";
  // setcookie("version", 'ARA', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}

$b = $_GET['b']; //book
$c = $_GET['c']; //cap
$o = $_GET['o']; //Order
$v = $_GET['v']; //Order
?>

<html>
<head>

<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="https://leituracrista.com/biblia/img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
textarea:focus, input:focus, select:focus {
    box-shadow: 0 0 0 0;
    border: 0 none;
    outline: 0;
} 

.btn-text-top {
  background-color: white;
  border: 1px solid rgba(255, 255, 255, .1);
  padding-left: 10px;
  border-radius: 20px;
  width: 140px;
  height: 30px;
  font-size: 15px;
  color: #424249;
  /* z-index: 9999; */

  }

  .btn-buscar-top {
  width: 20px!important;
  height: 22px;
  background: url(http://www.devmedia.com.br/imagens/2013/buscar_grey.png) no-repeat;
  cursor: pointer!important;
  border: none;
  transform: translateY(-50%);
  position: relative;
  top: -15px;
  left: 123px;
  z-index: 9999; /* número máximo é 9999 */

} 

.noSelect {
    -webkit-touch-callout: none;  /* iPhone OS, Safari */
    -webkit-user-select: none;    /* Chrome, Safari 3 */
    -khtml-user-select: none;     /* Safari 2 */
    -moz-user-select: none;       /* Firefox */
    -ms-user-select: none;        /* IE10+ */
    user-select: none;            /* Possível implementação no futuro */
    /* cursor: default; */
}

/* Hide scrollbar for Chrome, Safari and Opera */
/* #livros::-webkit-scrollbar {
  display: none;
} */

/* Hide scrollbar for IE, Edge and Firefox */
/* #livros {
  -ms-overflow-style: none; 
  scrollbar-width: none; 
} */

p {
  font-family:Verdana, Geneva, sans-serif;
  font-size: 20px;
  color: #424249;
}

::-moz-selection { /* Code for Firefox */
  color: red;
  background: #ffffc7;
}

::selection {
  color: red;
  background: #ffffc7;
}
/* #divEsquerda:hover {
    width: 200px;
    } */
    a {
    color:blue;
    text-decoration: none;
    cursor:pointer;
    }
    
    #box {
      display: flex;
    }
    #sidebar{
        background-color: #F2F2F2;
        width: 150px;
        height: 100%;
        position: fixed;
        padding:10px;
        top:0;
        /* display: none */

    }
    #b {
      flex-grow: 100;
      background-color: green;
      padding-left: 180px;
      height: 100%;
    }

    #livros{
      overflow:auto;
      height: 80%;
      font-size:19px;

    }

    #Caps{
        background-color: #F2F2F2;
        position: fixed;
        top:0;
        padding:10px;
    }

    #Text{
      background-color: white;
      padding-left: 50px;
      padding-right: 50px;

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
</style>

<body>
  
<div id='box'>
   
    <div id='sidebar'>
    
    <div class="noSelect"  id="Conf">
          
    <form class="form-busca-site" action="#">
    <!-- <form class="form-busca-site" action="busca.php"> -->
            <input disabled class="btn-text-top" type="text" name="txtsearch" placeholder="Buscar">
            <div><button class="btn-buscar-top" type="submit"></button></div>
          </form>
              <a href="/"><button><img style="width:16px;" title="Layout Sidebar" src="img/sidebar.png" alt="Layout Sidebar"></button></a>
              <button><img id="resetFont" style="width:16px;" title="Restaurar fonte" src="img/reset.png" alt="Restauar Fonte"></button>
              <button name="decrease-font" id="btnDiminuir" title="Diminuir fonte">A <sup>-</sup></button> 
              <button name="increase-font" id="btnAumentar" title="Aumentar fonte">A <sup>+</sup></button> 
    </div>
    
          <hr>
    
    <div class="noSelect" id="livros">
<?php
$sql = "SELECT abr, ord, book, testament, version FROM biblias where `version`= '$version' group by ord order by ord";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  if ($reg->testament == 1){
    echo '<a class="alivros" onClick="getCapsAndText(\'' . $version . '\','. $reg->ord .',\''. $reg->book . '\');setUrl(\'' . $version . '\','. $reg->ord .',1,\'' . $reg->book . '\')" >' . $reg->book . '</a><br>';}
  if ($reg->testament == 2){
    echo '<a class="alivros" onClick="getCapsAndText(\'' . $version . '\','. $reg->ord .',\''. $reg->book . '\');setUrl(\'' . $version . '\','. $reg->ord .',1,\'' . $reg->book . '\')" style="color:red" >' . $reg->book . '</a><br>';}
endforeach;
?>
<br><br>
    </div>
    </div>
    
    
   
    <div id='b'>
        <div class="noSelect"  id="Caps">Capítulos: </div>   
        <div id="Text">
        </div>   
    </div>

</div>    

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
<!-- versions informations -->
<div style="font-size:16" id="versionsInfo">
<span > Escolha a versão para leitura clicando nos links abaixo</span><p></p>

(<a href="#"><span onClick="SetCookie('version','ARC69','365')" style="cursor:pointer"><b>ARC69</b></span></a>) Edição Revista e Corrigida (1898, 1969).
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARC95','365')" style="cursor:pointer"><b>ARC95</b></span></a>) Edição Revista e Corrigida (1898, 1995). 
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARF','365')" style="cursor:pointer"><b>ARF</b></span></a>) Edição Corrigida e Revisada Fiel ao Texto Original.
<p></p>
(<a href="#"><span onClick="SetCookie('version','AIB','365')" style="cursor:pointer"><b>AIB</b></span></a>) Edição Revisada pela Imprensa Bíblica Brasileira em 1967.
<p></p>
(<a href="#"><span onClick="SetCookie('version','TB','365')" style="cursor:pointer"><b>TB</b></span></a>) Edição Bíblica Britânica.
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARA','365')" style="cursor:pointer"><b>ARA</b></span></a>) Edição Revista e Atualizada (1959, 1993).
 <p></p>
(<a href="#"><span onClick="SetCookie('version','JER','365')" style="cursor:pointer"><b>JER</b></span></a>) Edição de Jérusalem.
 <p></p> 
(<a href="#"><span onClick="SetCookie('version','VC','365')" style="cursor:pointer"><b>VC</b></span></a>) Edição Versão Católica (1959)
<p></p>
(<a href="#"><span onClick="SetCookie('version','JND','365')" style="cursor:pointer"><b>JND</b></span></a>) John Nelson DARBY.
<p></p>
(<a href="#"><span onClick="SetCookie('version','KJV','365')" style="cursor:pointer"><b>KJV</b></span></a>) King James Version.
</div>  </div>

</div>

<div id="interlinear" class="inter">
</div>

<script>



function resizeDivText(){
var marginTop = $("#Caps").height();
$("#Text").css("padding-top", marginTop);
}


    function getCapsAndText(version, ord, book)
{
    var v = version
    var o = ord
    var b = book
    var c = 1
    $("#Caps").load("ajax_cap.php", {"order": o, "version": v, "book": b,});
    $("#Text").load("ajax_text.php", {"version": v, "order": o, "cap": c, "book": b,});

    var marginTop = $("#Caps").height();
    $("#Text").css("padding-top", marginTop);

}

    function getText(version, ord, cap, book)
    {
        var v = version
        var o = ord
        var c = cap
        var b = book
        $("#Text").load("ajax_text.php", {"version": v, "order": o, "cap": c, "book": b,});
    }

$(document).ready(function(){

  resizeDivText();
  document.title= 'Bíblia Sagrada';

});  

$('#Caps').resize(function(){
  resizeDivText();
})

$(window).resize(function(){
  resizeDivText();
})

function setUrl(version,ord,cap,book)
{
 var new_url='?o='+ord+'&b='+book+'&c='+cap+'&v='+version;
 window.history.pushState("", book + cap, new_url);
 document.title=book + ' ' + cap;
}

// reset font
var $reset = $("#resetFont");
var $elemento = $(".verseTextP");

$reset.on('click', function() {
  // alert(version)
  $elemento.css('font-size', 20);
  localStorage.setItem('fontSize', '20');
});


// setar tamanho da fonte
var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $reset = $("#resetFont");
var $elemento = $(".verseTextP");

function obterTamnhoFonte() {
  return parseFloat($elemento.css('font-size'));
}

$btnAumentar.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() + 1);
  localStorage.setItem('fontSize', obterTamnhoFonte());
});

$btnDiminuir.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() - 1);
  localStorage.setItem('fontSize', obterTamnhoFonte());
});



// Ao clicar no texto do versículo
function highlightVerseText(){
$(".hightlights").css("background-color", "");
// setTimeout(highlightVerse, 1000);
var v = 'verse' + localStorage.getItem('verseInterlinear');
color = document.getElementById(v).style.backgroundColor;
if (color != ''){
document.getElementById(v).style.backgroundColor = "";
}else{
  document.getElementById(v).style.backgroundColor = "#ffffc7";
}
// alert(teste);
}

$(function($){   
	$(".verseText").click(function() {
alert(ok)
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
</script>