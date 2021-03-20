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
?>

<html>
<head>

<script>

// $( document ).ready(function() {
  if (localStorage.getItem('layoutBar') != null){
    if (localStorage.getItem('layoutBar') == 0)
      {
      window.location.href = "index.php";
      }else{
      }
  }
// });

</script>

<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="https://leituracrista.com/biblia/img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<style>

  
hr { margin:  10px 10px; }


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
  width: 178px;
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
  left: 185px;
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
        white-space: nowrap;
        width: 190px;
        height: 100%;
        position: fixed;
        padding:10px;
        top:0;
        /* display: none */

    }
    #b {
      flex-grow: 100;
      background-color: green;
      padding-left: 190px;
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
        padding:12px;
        padding-left:20px
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
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  color:#000;
  padding:20px;
  float:left;
  overflow: auto;
  background: #f0e68c;  
  font-size:20px;
  opacity: 0.97;
}

</style>

<body id="noScroll">
  
<?
if(!empty($_GET['b'])) {
  $b = $_GET['b']; //book
  $c = $_GET['c']; //cap
  $o = $_GET['o']; //Order
  $v = $_GET['v']; //Order
  }else{?>

    <script>
    var v = '<? echo $version?>'
    var o = 1
    var b = 'Gênesis'
    var c = 1
    // seta URL
    var new_url='?o='+ o +'&b='+ b +'&c='+ c +'&v='+ v;
    window.history.pushState('', b + c, new_url);
    
    $("#Text").load("ajax_text.php", {"version": v, "order": o, "cap": c, "book": b,});
    location.reload();
    </script>
  
  <?}?>

<div id='box'>
   
    <div id='sidebar'>
    
    <div class="noSelect"  id="Conf">
          
    <form class="form-busca-site">
    <!-- <form class="form-busca-site" action="busca.php"> -->
            <input class="btn-text-top" type="text" name="txtsearch" placeholder="Buscar">
            <div style="z-index: 9999;"><button class="btn-buscar-top" type="submit"></button></div>
    </form>
              <a href="index.php" onclick="localStorage.setItem('layoutBar',0);"><button><img style="width:16px;" title="Layout Sidebar" src="img/sidebar.png" alt="Layout Sidebar"></button></a>
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
    echo '<a class="alivros" onClick="getCapsAndText(\'' . $version . '\','. $reg->ord .',\''. $reg->book . '\',1);setUrl(\'' . $version . '\','. $reg->ord .',1,\'' . $reg->book . '\')" >' . $reg->book . '</a><br>';}
  if ($reg->testament == 2){
    echo '<a class="alivros" onClick="getCapsAndText(\'' . $version . '\','. $reg->ord .',\''. $reg->book . '\',1);setUrl(\'' . $version . '\','. $reg->ord .',1,\'' . $reg->book . '\')" style="color:red" >' . $reg->book . '</a><br>';}
endforeach;
?>
<br><br>
    </div>
    </div>
    
    
   
    <div id='b'>
        <div class="noSelect"  id="Caps">Capítulos: </div>   
        <div id="Text"></div>   
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
      
      </div>  
    </div>
</div>

<div id="interlinear" class="inter verseTextP">
</div>

<script>
// Script de Busca
$(document).on("submit", "form", function(event)
{
    event.preventDefault();  
    var txtsearch  = $("input[name=txtsearch]").val(); 
    $("#Text").load("busca_sidebar.php", {"txtsearch": txtsearch});
   
});


// abre de de versiculos Interlinear
function interlinear(order, book, cap, verse)
{

  setTimeout(function(){ 
document.getElementById('noScroll').style.overflow = "hidden";

  
    $("#interlinear").load("ajax.php", {"book": book, "order": order, "cap": cap, "verse": verse,});
    $(".inter").css('width','100%');
					$(".inter").animate({
            width: "toggle"
          });
          $("#interlinear").animate({ scrollTop: 0 }, "fast");

          }, 200);
}

function resizeDivText(){
var marginTop = $("#Caps").height()+20;
$("#Text").css("padding-top", marginTop);
}


    function getCapsAndText(version, ord, book, cap)
{
    var v = version
    var o = ord
    var b = book
    var c = cap
    $("#Caps").load("ajax_cap.php", {"order": o, "version": v, "cap": c, "book": b,});
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
    $("#Caps").load("ajax_cap.php", {"order": o, "version": v, "cap": c, "book": b,});
    $("#Text").load("ajax_text.php", {"version": v, "order": o, "cap": c, "book": b,});
    // seta URL
    var new_url='?o='+ord+'&b='+book+'&c='+cap+'&v='+version;
    window.history.pushState("", book + cap, new_url);
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
 window.history.pushState('', book + cap, new_url);
 document.title=book + ' ' + cap;
}

// reset font
var $reset = $('#resetFont');
var $elemento = $('.verseTextP');

$reset.on('click', function() {
  // alert(version)
  $elemento.css('font-size', 20);
  localStorage.setItem('fontSize', '20');
});


// setar tamanho da fonte
var $btnAumentar = $('#btnAumentar');
var $btnDiminuir = $('#btnDiminuir');
var $reset = $('#resetFont');
var $elemento = $('.verseTextP');

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
$('.hightlights').css('background-color', '');
// setTimeout(highlightVerse, 1000);
var v = 'verse' + localStorage.getItem('verseInterlinear');
color = document.getElementById(v).style.backgroundColor;
if (color != ''){
document.getElementById(v).style.backgroundColor = '';
}else{
  document.getElementById(v).style.backgroundColor = '#ffffc7';
}
// alert(teste);
}

function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    window.scrollTo(0, 0); 
    var url = location.href.split('v=');
    // location.reload();
    window.location.href = url[0]+'v='+value;

        var v = '<?php echo $v?>';
        var o = '<?php echo $o?>';
        var c = '<?php echo $c?>';
        var b = '<?php echo $b?>';
        
        // alert(v);
        // $("#Text").load("ajax_text.php", {"version": v, "order": o, "cap": c, "book": b,});  
  }

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