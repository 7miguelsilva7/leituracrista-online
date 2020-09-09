<!DOCTYPE html>


<?php
$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARA";
  // setcookie("version", 'ARA', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="https://leituracrista.com/biblia/img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">
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

* {
  box-sizing: border-box;
}

a { 
  text-decoration: none;
  color: blue;
 }

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  /* height: 300px; */
}

.divBooks {
  width: 100%;
  overflow: auto;
  max-height: 80vh;
  white-space: nowrap;
  }

.divConf {
  width: 100%;
  overflow: auto;
  max-height: auto;
}

.divCap {
  width: auto;
  overflow: auto;
  max-height: auto;
}

.divText {
  width: 85%;
  overflow: auto;
  max-height: 90vh;;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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
echo '<title>' . $b . ' ' . $c . '</title>';


// conta qtd capítulos
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= '$version' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$rowcount =  $stm->rowCount();
// conta qtd capítulos
?>

  <div class="bottom">
    <div style="float: left; width: 15%;">
      <div class="row">
        <div class="column divConf" style="background-color:#eee;" >
          <span><a style="cursor:pointer" id="myBtn"><b><? echo '('. $version .')</a><br>'. $b; ?></b></span><br><br>
              <a href="text.php?o=<?php echo $o?>&b=<?php echo $b?>&c=<?php echo $c?>&v=<?php echo $v?>"><button><img id="sidebar" style="width:16px;" title="Layout Sidebar" src="img/sidebar.png" alt="Layout Sidebar"></button></a>
              <button><img id="resetFont" style="width:16px;" title="Restaurar fonte" src="img/reset.png" alt="Restauar Fonte"></button>
              <button name="decrease-font" id="btnDiminuir" title="Diminuir fonte">A <sup>-</sup></button> 
              <button name="increase-font" id="btnAumentar" title="Aumentar fonte">A <sup>+</sup></button> 
        </div>
        
      </div>

      <div class="column divBooks" style="background-color:#eee;">
<?php
$sql = "SELECT abr, ord, book, testament, version FROM biblias where `version`= '$version' group by ord order by ord";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  if ($reg->testament == 1){
    echo '<a href="text_sidebar.php?o=' . $reg->ord . '&b=' . $reg->book . '&c=1' . '&v=' . $reg->version . '" class="btn" style="font-size:17px;" >' . $reg->book . '</a><br>';}
  if ($reg->testament == 2){
    echo '<a href="text_sidebar.php?o=' . $reg->ord . '&b=' . $reg->book . '&c=1' . '&v=' . $reg->version . '" class="btn" style="font-size:17px;color:red" >' . $reg->book . '</a><br>';}
endforeach;
?>
      </div>
    </div>

    <div class="row">
    <div  style="float: left; width: 85%;">
          <div class="column divCap" style="background-color:#eee;">
            <span>Capítulos: </span>
<?php
$sql = "SELECT book, ord, cap, version FROM biblias 
where `version`= '$version' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
// $rowcount =  $stm->rowCount();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  if ($reg->cap == $c){
   echo '<a href="text_sidebar.php?o=' . $o . '&b=' . $b . '&c=' . $reg->cap . '&v=' . $reg->version .'" style="line-height: 1;font-size:15px;color:red" class="btn"><b> ' . $reg->cap . ' </b></a>';
  }else{
   echo '<a href="text_sidebar.php?o=' . $o . '&b=' . $b . '&c=' . $reg->cap . '&v=' . $reg->version .'" style="line-height: 1;font-size:15px" class="btn"> ' . $reg->cap . ' </a>';
  }
endforeach;
?>          
  </div>
    </div>

    <!--  texto do capitulo -->
      <div class="column divText" style="background-color:white;font-size:20px;">
<?
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
  echo '<div  style="cursor:pointer;font-size:20px;" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><span class="verseText"><span style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</span></span><span  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?>
      
      </div>
    </div>
    </div>

<script>

$( document ).ready(function() {
  var hTotal = $(window).height()

// height divBooks
var hConf = $('.divConf').height()

  // alert(hConf)
  var newBooksHeight = hTotal - hConf;
      $(".divBooks").height(newBooksHeight);
  // // height divCap
  // var hcap = Math.round(
  //       $('.divCap').height() /
  //       $(window).height() * 100
  //   );
  //   // alert(hcap)
  
  // var newCapHeight = hTotal - hcap;
  //   alert(newCapHeight)
  //     $(".divText").height(newCapHeight *100);
    
    
    });

</script>


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

// Ao clicar no texto do versículo
function highlightVerseText(){
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

// highlightVerse and fontSize
$( document ).ready(function() {
var fontSizeBible = localStorage.getItem('fontSizeBible');
var $elemento = $("body .verseTextP");
$elemento.css('font-size', fontSizeBible);
// document.getElementById("divText").style.fontSize = fontSizeBible;
// alert(localStorage.getItem('fontSizeBible'))

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

var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $reset = $("#resetFont");
var $elemento = $("body .verseTextP");

function obterTamnhoFonte() {
  return parseFloat($elemento.css('font-size'));
}

$btnAumentar.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() + 1);
  localStorage.setItem('fontSizeBible', obterTamnhoFonte() + 1);
});

$btnDiminuir.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() - 1);
  localStorage.setItem('fontSizeBible', obterTamnhoFonte() - 1);
});

$reset.on('click', function() {
  $elemento.css('font-size', 20);
  localStorage.setItem('fontSizeBible', 20);
});
</script>

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
    window.location.href = url[0]+'v='+value;  // Sadly this reloads
    // location.reload();

	}

</script>

</body>
</html>
