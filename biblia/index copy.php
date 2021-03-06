<?php
require_once 'dbconnect.php';  
?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bíblia Sagrada</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="shortcut icon" href="img/bible-icon.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<link rel="stylesheet" href="main.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<style>

#versionsInfo{
  padding:10;
}

.footersearch {
    background-color: gray;
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    /* bottom: 0; */
    top: 0;
    height: 50;
    padding-top: 8;
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

.btn-default
{
  width: 70;
  height: 60;
  border-style: solid;
  background: white;  
  
}

#config {
        position:fixed;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        padding: 20;
        background: yellow; text-align:center;
        display:none;
      }

@media screen and (max-width: 2000px) {
  body {
  
  margin: 100px;
  margin-top: 10px;
  }
  .abr{
    display:none;
  }
    input, select, textarea{
      color: black;
      width:50%;
      font-size:20;
  }


}

@media screen and (max-width: 800px) {
  body {
  
  margin: 50px;
  margin-top: 10px;

  }
  .abr{
    display:none;
  }
  input, select, textarea{
    color: black;
    width:90%;
    font-size:20;
}
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  body {
  
  margin: 1px;
  margin-top: 10px;
  }
  .abr{
    display:initial;
  }
  .book{
    display:none;
  }
}



a:link{
text-decoration: none;
active: 
}

div.book{
  columns: 150px 4;
  font-size: 30px;
  line-height: 1.9;
}

</style>
</head>





<!-- <div class="config" style="position: fixed; cursor: pointer; width:40; height:40; top:20; right:20;"><img width="40" src="img/config.png" alt="Configurações"></div>    -->


<div align="center">

<a href="#"><h3>Livros da Bíblia</h3></a>
<hr>
</div>

<div id="config">
Bíblia Interlinear <br>
<button class="config">Ativar</button> 
<button class="config">Desativar</button><br>
<span style="color:red">Disponível em breve!</span>
</div>

<div align="CENTER">
<!-- Complete books Names -->
<div align="left" class="book naoSelecionavel">
<?php
 $sql = "SELECT ord, book, testament FROM biblias where `version`= 'ARC69' group by ord order by ord";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 
 foreach($dados as $reg): 
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="font-size:16px"><button class="naoSelecionavel" style="width:100%;text-align:left;border:0; background:white; text-overflow: clip clip"> ' . $reg->book . '</button></a><br>';   
 endforeach;
  ?> 
</div>

<!-- Complete books Names -->



<!-- abreviate books names -->
<div align="center" class="abr naoSelecionavel">
<?php
$sql = "SELECT abr, ord, book, testament FROM biblias where `version`= 'ARC69' group by ord order by ord";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="font-size:16px"><button class="btn-default"> ' . $reg->abr . '</button></a><br>';   
  if ($reg->testament == 1){
  echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button  class="btn-default naoSelecionavel">' . $reg->abr . '</button></a>';}
  if ($reg->testament == 2){
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button style="color:blue" class="btn-default naoSelecionavel">' . $reg->abr . '</button></a>';}
endforeach;
?>
</div>
<!-- abreviate books names -->
</div >

<hr>

<!-- versions informations -->
<div id="versionsInfo">
Versões
<p></p>
(<b>ARC69</b>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Corrigida (1898, 1969).
<p></p>
(<b>ARC95</b>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Corrigida (1898, 1995). 
<p></p>
(<b>ARF</b>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Corrigida e Revisada Fiel ao Texto Original - Sociedade Bíblica Trinitariana do Brasil. 
<p></p>
(<b>AIB</b>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no Século XVII (ca. 1680) Edição Revisada pela Imprensa Bíblica Brasileira em 1967.
<p></p>
(<b>TB</b>) Bíblia Sagrada, traduzida entre os anos de 1902 e 1917, sob a coordenação do Rev. William Cabell Brown, erudito na área das línguas bíblicas, e Eduardo Carlos Pereira, famoso filólogo da Língua Portuguesa, ambos prestimosos colaboradores da obra bíblica no Brasil, a serviço da Sociedade Bíblica Britânica e Estrangeira (de Londres) e da Sociedade Bíblica Americana (de Nova Iorque).
<p></p>
(<b>ARA</b>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Atualizada (1959, 1993).
 <p></p>
(<b>VC</b>) Versão Católica, traduzida dos originais dos Monges de Maredsous (Bélgica) pelo Centro Bíblico Católico, revisada pelo Frei João José Pedreira de Castro em 1959.
<p></p>
(<b>JND</b>) A New translation from the original languages by J.N.DARBY
<p></p>
(<b>KJV</b>) 1611 Authorised Version To the Most High and Mighty Prince JAMES, by the grace of God, King of Great Britian, France, and Ireland, Defender of the Faith.

</div>

</body>

<br><br>
<br><br>

<div class="footersearch"  align="center">
<form action="busca.php?pageno=1">
  <input style="" name="q" autofocus placeholder="Busca">
</form>
</div>


<script>
  $(function($){   
	$(".config").click(function() {
		$("#config").animate({
      width: "toggle"
    });
	});
  })
</script>
  
