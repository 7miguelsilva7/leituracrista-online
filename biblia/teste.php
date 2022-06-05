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
    #a{
        background-color: #F2F2F2;
        width: 150px;
        height: 100%;
        position: fixed;
        padding:10px;
        top:0;

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
</style>

<body>
  
<div id='box'>
   
    <div id='a'>
    
    <div class="noSelect"  id="Conf">Tree TesteTTT</div>
    
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

$(".alivros").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "fast");
  // alert('top')
  return false;
});

function setUrl(version,ord,cap,book){
  window.location.href = '?o='+ord+'&b='+book+'&c='+cap+'&v='+version; 
  }

function setUrl(version,ord,cap,book)
{
 var new_url='?o='+ord+'&b='+book+'&c='+cap+'&v='+version; ;
 window.history.pushState("", book + cap, new_url);
 document.title=book + ' ' + cap;
}
</script>