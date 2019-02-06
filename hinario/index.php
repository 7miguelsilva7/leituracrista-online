<html>

<head>
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

<a target="_parent" href='http://edumais.com.br/gerarprovas'><img style="display:scroll;position:fixed;top:20px;right:30px;width:40px;height:40px;" src="#"></a>

<style>

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

p {
  margin-top: 4pt;
  margin-bottom: 4pt;
}

p {
  -webkit-margin-before: 4pt;
  -webkit-margin-after: 4pt;
}

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
width:50%;
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

<div class=\"naoSelecionavel\" class=\"blocos\">
  <div class=\"bloco\">

  <form target=\"_direita\" id=\"form\" method=\"post\" action=\"provasimples.php\">
  <td>

  <div align=\"left\"><input onchange=\"autoform(form);\" type=\"checkbox\" id=\"$id\" name=\"question_id[]\" value=\"$id\" ><label for=\"$id\"><u><b>($questionname</b></u>)$espaco$espaco$espaco $questioncategory</label>  </td>
  <td><a href=\"javascript:void(window.open('viewQuestion.php?question_id=$id', 'popup', 'width=750,height=560'));\">visualizar</a></td></div>
  
  <font color=\"white\">@$disciplina@</font>
  <font color=\"white\">@$disciplina@@$descritor@</font>
  
  <hr>
 </div>
</div>";  

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
        }); 
    
      });
    
    });
</script> 

</html>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>