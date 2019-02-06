<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title><?
  echo "Gerador-" . date("d-m-Y");
  ?></title>
</head>

<body >
<!-- <div id="myBtnContainer">
  <button class="btn" data-cad="@PT@" onclick="filterSelection('portugues')"> Português</button>
  <button class="btn" data-cad="@MT@" onclick="filterSelection('matematica')"> Matamática</button>
</div><br> -->

<a target="_parent" href='http://edumais.com.br/gerarprovas'><img style="display:scroll;position:fixed;top:20px;right:30px;width:40px;height:40px;" src="http://edumais.com.br/gerarprovas/img/back.png"></a>

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
$total_reg = "2000"; // número de registros por página
?>

<?php
// $disciplina	= $_POST ["disciplina"];
$nivel	= $_POST ["nivel"];	
require_once '../../edumais/connect.php';

$con = mysql_connect("$host","$user","$pass");
mysql_query("SET NAMES 'utf8'", $con);
mysql_query('SET character_set_connection=utf8', $con);
mysql_query('SET character_set_client=utf8', $con);
mysql_query('SET character_set_results=utf8', $con);
$db = mysql_select_db("$db");
?>

<?php

// $disciplina	= $_POST ["disciplina"];
$nivel	= $_POST ["nivel"];



$busca = "SELECT
p.name as name, p.id as id,
replace(p.questiontext,'</p><br>','') as questiontext,
qc.name as category, character_length(p.name) as length,
substr(p.name,4,3) as descritor,
substr(p.name,1,2) as disciplina,
replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(answer,'<p style\=\"display:inline;\">',''),'</br>',''),'</p>',''),'(A)','A)'),'(B)','B)'),'(C)','C)'),'(D)','D)'),'B)','</br>B)'),'C)','</br>C)'),'D)','</br>D)') as answer
from cs_perguntas p
inner join cs_respostas_concat r on r.question=p.id
inner join fhrw_question_categories qc on qc.id=p.category
where 

substr(qc.name,6,1)=$nivel

group by p.id, r.question
order by category DESC, name";
?>


<!-- seletor de descritor Fundamental 1 -->
<?if ($nivel == 1)
{
  echo "

  <div class=\"footer-pt\">
  <a href=\"#\" class=\"btn\" data-cad=\"@PT@\" onclick=\"filterSelection('portugues')\"><B >PORTUGUÊS</B></a><P>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D01@\">D01</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D02@\">D02</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D03@\">D03</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D04@\">D04</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D05@\">D05</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D06@\">D06</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D07@\">D07</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D08@\">D08</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D09@\">D09</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D10@\">D10</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D11@\">D11</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D12@\">D12</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D13@\">D13</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D14@\">D14</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D15@\">D15</a>
     
     <a href=\"#\" class=\"btn\" data-cad=\"@PT@\">Todos</a>
        
  <br><br>
  </div>
  
  
  <div class=\"footer-mt\">
  <a href=\"#\" class=\"btn\" data-cad=\"@MT@\" onclick=\"filterSelection('matematica')\"><B >MATEMÁTICA</B></a><P>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D01@\">D01</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D02@\">D02</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D03@\">D03</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D04@\">D04</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D05@\">D05</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D06@\">D06</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D07@\">D07</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D08@\">D08</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D09@\">D09</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D10@\">D10</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D11@\">D11</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D12@\">D12</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D13@\">D13</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D14@\">D14</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D15@\">D15</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D16@\">D16</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D17@\">D17</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D18@\">D18</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D19@\">D19</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D20@\">D20</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D21@\">D21</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D22@\">D22</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D23@\">D23</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D24@\">D24</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D25@\">D25</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D26@\">D26</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D27@\">D27</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D28@\">D28</a>
     <a href=\"#\" class=\"btn\" data-cad=\"@MT@\">Todos</a>
        
  <br><br>
  </div>";
}
  ?>

<?if ($nivel == 2)
{
  echo "
  
    <div class=\"footer-pt\">
    <a href=\"#\" class=\"btn\" data-cad=\"@PT@\" onclick=\"filterSelection('portugues')\"><B >PORTUGUÊS</B></a><P>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D01@\">D01</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D02@\">D02</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D03@\">D03</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D04@\">D04</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D05@\">D05</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D06@\">D06</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D07@\">D07</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D08@\">D08</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D09@\">D09</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D10@\">D10</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D11@\">D11</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D12@\">D12</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D13@\">D13</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D14@\">D14</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D15@\">D15</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D16@\">D16</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D17@\">D17</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D18@\">D18</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D19@\">D19</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D20@\">D20</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@@D21@\">D21</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@PT@\">Todos</a>
          
    <br><br>
    </div>
    
    
    <div class=\"footer-mt\">
    <a href=\"#\" class=\"btn\" data-cad=\"@MT@\" onclick=\"filterSelection('matematica')\"><B >MATEMÁTICA</B></a><P>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D01@\">D01</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D02@\">D02</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D03@\">D03</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D04@\">D04</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D05@\">D05</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D06@\">D06</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D07@\">D07</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D08@\">D08</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D09@\">D09</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D10@\">D10</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D11@\">D11</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D12@\">D12</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D13@\">D13</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D14@\">D14</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D15@\">D15</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D16@\">D16</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D17@\">D17</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D18@\">D18</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D19@\">D19</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D20@\">D20</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D21@\">D21</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D22@\">D22</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D23@\">D23</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D24@\">D24</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D25@\">D25</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D26@\">D26</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D27@\">D27</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D28@\">D28</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D29@\">D29</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D30@\">D30</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D31@\">D31</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D32@\">D32</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D33@\">D33</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D34@\">D34</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D35@\">D35</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D36@\">D36</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@@D37@\">D37</a>
       <a href=\"#\" class=\"btn\" data-cad=\"@MT@\">Todos</a>
          
    <br><br>
    </div>";

}
?>


<?php

$pagina=1;
if (!$pagina) {
$pc = "1";
} else {
$pc = $pagina;
}
?>

<?php
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;
?>

<script>
function autoform(form) {
//    alert(form.id);
   document.getElementById(form.id).submit();
}
</script>

<?php
$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");
 
$tr = mysql_num_rows($todos); // verifica o número total de registros
$tp = $tr / $total_reg; // verifica o número total de páginas
 
// vamos criar a visualização
while ($dados = mysql_fetch_array($limite)) {
  $questiontext = $dados["questiontext"];
  $answer = $dados["answer"];
  $questionname = $dados["name"];
  $questioncategory = $dados["category"];
  $disciplina = $dados["disciplina"];
  $descritor = $dados["descritor"];
  $id = $dados["id"];
  $length = $dados["length"];
  
  if ($length == 8) {
    $espaco = '&nbsp;';
  }else{$espaco = '';}

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


}
 
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