<html>

<head>
<link rel="shortcut icon" href="http://playlistcrista.esy.es/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>Hinário para Uso Offline</title>
</head>

<body >
<!-- <div id="myBtnContainer">
  <button class="btn" data-cad="@PT@" onclick="filterSelection('portugues')"> Português</button>
  <button class="btn" data-cad="@MT@" onclick="filterSelection('matematica')"> Matamática</button>
</div><br> -->

<img onclick="myFunction()" style="display:scroll;position:fixed;top:20px;right:30px;width:40px;height:40px;" src="http://playlistcrista.esy.es/favicon.ico">

<style>

body {
    font-size: 20px;

}    

 input[type="checkbox"], input[type="checkbox"] + label {
    cursor: pointer;
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

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 50px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  /* border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1; */
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: yellow;
  color: white;
  background: yellow;

}

.btn.focus {
  background-color: yellow;
  cursor: pointer;
}

#button{

background-color: green;
cursor: pointer;
}

/* p {
  margin-top: 4pt;
  margin-bottom: 4pt;
}

p {
  -webkit-margin-before: 4pt;
  -webkit-margin-after: 4pt;
} */

a{
cursor: pointer;
padding: 5px;
color: blue;
text-decoration: none;
}

a:hover{
color: red;
}

a:focus {
  background-color: yellow;
  cursor: pointer;
}
a:active {
  background: yellow;
  cursor: pointer;
}

.cursos{
margin-top: 0px;
}

.cursos .curso{
padding: 5px;
}

.footer-pt {
position:fixed;		/*importante: fixa a div */
bottom:0;		/*importante: posiciona no rodapé */
width:49.9%;
left: 0px;
z-index:2000;		/*importante: coloca a div acima de tudo */
background:#CC3;
margin:0;
padding:3px 0;
text-align:center;
font-size: 18px;
border-top:3px dashed #FFF
}

.footer-mt {
position:fixed;		/*importante: fixa a div */
bottom:0;		/*importante: posiciona no rodapé */
width:100%;
right: 0px;
z-index:2000;		/*importante: coloca a div acima de tudo */
background:#CC3;
margin:0;
padding:3px 0;
text-align:center;
font-size: 18px;
border-top:3px dashed #FFF
}

.div-em-colunas {
    -webkit-column-count:2; /* Chrome, Safari, Opera */
    -moz-column-count:2;    /* Firefox */
    column-count:2;         /* padrão */
}


</style>


<?php

  echo "

  <div id=\"myDIV\" class=\"footer-mt\" style=\"overflow-y: auto; height:100%; \">
  </p>
     <a href=\"#\" class=\"btn\" data-cad=\"@Todos@\" onclick=\"filterSelection('matematica');\"><B>HINOS</B></a><P>
     <a onclick=\"myFunction()\" href=\"#\" class=\"btn\" data-cad=\"@001@\">001</a>
     <a onclick=\"myFunction()\" href=\"#\" class=\"btn\" data-cad=\"@002@\">002</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@003@\">003</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@004@\">004</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@005@\">005</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@006@\">006</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@007@\">007</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@008@\">008</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@009@\">009</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@010@\">010</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@011@\">011</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@012@\">012</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@013@\">013</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@014@\">014</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@015@\">015</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@016@\">016</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@017@\">017</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@018@\">018</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@019@\">019</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@020@\">020</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@021@\">021</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@022@\">022</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@023@\">023</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@024@\">024</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@025@\">025</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@026@\">026</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@027@\">027</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@028@\">028</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@Todos@\">Todos</a>
        
  <br><br>
  </div>"

  ?>
<?php

echo "

<div align=\"center\" class=\"naoSelecionavel\" class=\"blocos\">
  <div class=\"bloco\">

  

  <font color=\"white\">@001@</font>
  <font color=\"white\">@Todos@</font></p>

  <b>001 - Aba, Pai, a Ti Chegamos</b> </p></p>

1.Aba, Pai! A Ti chegamos, hoje, em nome de Jesus,</br> 
Deus e Pai a Ti chamamos, sendo filhos já da luz.</br> 
Dos delitos libertados, pelo sangue do Senhor; </br>
Pelo Espírito ensinados, damos-Te real louvor.</p>

2.Fomos como fugitivos, longe do paterno lar, </br>
Mas, quais filhos redimidos, nos quiseste abençoar.</br> 
Por amor nos perdoaste, nos levaste para Ti; </br>
Nos beijaste, nos sentaste à paterna mesa aqui.</p>

3.Já por Tuas mãos vestidos com os trajes de favor, </br>
Dentro em casa recolhidos desfrutamos Teu amor. </br>
Redimidos e lavados, renascidos para Deus; </br>
Restaurados, bem amados, feitos cidadãos dos céus.</p>

4.Aba, aqui, nós Te adoramos, muito alegres por saber </br>
Que por nós que em Cristo estamos, vão Teus anjos conhecer </br>
Teu saber maravilhoso, Tua graça, Teu amor; </br>
E movidos de alegria Te adorar com novo ardor.</p>

<hr>
 </div>
</div>
";

###############################################################################

echo "

<div align=\"center\" class=\"naoSelecionavel\" class=\"blocos\">
  <div class=\"bloco\">

  

  <font color=\"white\">@002@</font>
  <font color=\"white\">@Todos@</font></p>

  <b>002 - Foi Nessa Noite Escura</b></p></p>

  1.Foi nessa noite escura que Tu, Senhor Jesus,</br>
  Com Tu'alma já afligida prevendo Tua cruz,</br>
  Amando nos pediste: \"Fazei assim por Mim\";</br>
  De coração fervente Te recordamos sim.</p>
  
  2.Teu coração sofrendo - imensa foi a dor!</br>
  Bebeste por nós toda a taça de amargor,</br>
  Lá, quando no Calvário, Teu Deus Te abandonou;</br>
  Com gratidão lembramos que assim nos perdoou.</p>
  
  3.Imóvel, em tormento, estavas Tu ali,</br>
  \"As ondas e as vagas\" passando sobre Ti;</br>
  Tão infinita graça, amor em perfeição,</br>
  Com gozo e real tristeza, recorda o coração.</p>
  
  4.Já dentre os mortos, Cristo, ressuscitado estás!</br>
  Te vemos lá em glória, Autor de nossa paz;</br>
  Por graça em Ti aceitos, gozando filiação,</br>
  Lembramos Tua pena, amor e submissão.</p>
  
  5.Pois até que Tu venhas chamar-nos, ó Senhor!</br>
  Pra onde o dia brilha e eterno é o esplendor,</br>
  Queremos Tua morte aqui anunciar,</br>
  E a ela conformados, Teu nome recordar!</p>

<hr>
 </div>
</div>

";  

// <input type=\"checkbox\">$questioncategory - $questionname<br>$questiontext<br>

// $answer<hr>";

 
// agora vamos criar os botões "Anterior e próximo"
$anterior = $pc -1;
$proximo = $pc +1;
if ($pc>1) {
// echo " <a href='?pagina=$anterior'><- Anterior</a> ";
}
// echo "|";
if ($pc<$tp) {
// echo " <a href='?pagina=$proximo'>Próxima -></a>";
}
?>

</body>
<br>
<br>
<br>
<br>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>

   $(function(){ 

      $(".btn").click(function(){
        var texto = $(this).attr('data-cad');
        
        $(".bloco").each(function(){
          var resultado = $(this).text().toUpperCase().indexOf(' '+texto.toUpperCase());
          
          if(resultado < 0) {
            $(this).fadeOut();
          }else {
            $(this).fadeIn();
          }
          myFunction()
        }); 
    
      });
    
    });
</script> 

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</html>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>