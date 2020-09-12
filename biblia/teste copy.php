<!DOCTYPE html>


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
<meta property="og:image" content="https://leituracrista.com/biblia/img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

div{
    font-family:Verdana, Geneva, sans-serif;
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
    text-decoration: none;}
* { margin: 0; padding: 0;}
    h1 { font-size: 20px; padding-bottom: 10px; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.2); }
    #container {
      position: fixed;
      width: 100%;
      height: 100%;
      overflow: hidden;

    }

    #divConf {
    width:180px;
    position:fixed;
    background: #F2F2F2;
    padding-top: 10px;
    }

    #divLivros {
        white-space: nowrap;
        color: #F2F2F2;
        text-decoration: none;
    }

    #divLivros a{
    cursor:pointer;
    }

    #divCaps
    {
    position:fixed;
    width:auto;
    background: #F2F2F2;
    padding-top: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 15px;
    z-index: 1000;

    }

    #divText{
    position: relative;
    /* flex-grow: 100; */
    padding-top: 50px;
    padding-right:30px; 
    padding-left: 30px;

    }

    #divEsquerda, #divDireita {
      position: fixed;
      height: 100%;
      top: 0;
      bottom: 0;
      overflow: auto;
      -webkit-box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	box-sizing: border-box;  
    }
    #divEsquerda{ padding: 10px;padding-top: 0px; width: 200px;background: #F2F2F2; left: 0;}
    #divDireita { width: auto; left: 200px; }
</style>
</head>
<body>

    <div id="container">
        <!-- esquerda -->
        <div id="divEsquerda">
            
            <div id="divConf">
            Config <br> Teste <br>
            </div>
            
            <div id="divLivros" style="padding-top: 60px;">
            <a onClick="setPar('ARF',1)" >Gênesis</a> <br> <a onClick="setPar('ARF','19')" >Salmos</a> <br> Teste 4<br> Teste 5<br> Teste 6 <br>Teste 7<br> Teste 8<br>
            </div>

        </div>            
        
        <!-- direita -->
        <div id="divDireita">

            <div id="divCaps">
                Capítulos<br>
            </div>

            <div id="divText">
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            Conteúdo da Direita <br>
            </div>

        </div>

    </div>

<script>
    // $(document).ready(function(){

    //   var marginTop = $("#divCaps").height()+25;
    //   $("#divEsquerda").css("top", marginTop);

    // // alert(marginTop);
    // $("#divText").css("padding-top", marginTop);
    // $("#divEsquerda").hover(function(){
    // $("#divDireita").css("left", 200);
    // $("#divEsquerda").css("width", 200);
    // $("#divLivros").css("color", 'initial');
    // $("#divLivros a").css("color", 'blue');
    // $("#divConf").css("display", 'initial'); 
    // $("#divLivros a").css("text-decoration", 'none');
    // }, function(){
    // $("#divEsquerda").css("width", 50);
    // $("#divDireita").css("left", 50);
    // $("#divConf").css("display", 'none');
    // $("#divLivros").css("color", '#F2F2F2');
    // $("#divLivros a").css("color", '#F2F2F2');

});
});  

</script>
<script>
    function setPar (version, ord)
{
    var v = version
    var o = ord
    var c = 1
    $("#divCaps").load("ajax_cap.php", {"order": o, "version": v,});
    $("#divText").load("ajax_text.php", {"version": v, "order": o, "cap": c,});

}

    function setParCap (version, ord, cap)
    {
        var v = version
        var o = ord
        var c = cap
        $("#divText").load("ajax_text.php", {"version": v, "order": o, "cap": c,});
    }

</script>

</body>
</html>
