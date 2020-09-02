<?php

$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARA";
  // document.cookie = "version=ARA; expires=Thu, 31 Dec 2099 23:59:59 GMT";
} else {
  $version=$_COOKIE['version'];
}

require_once 'dbconnect.php';  
?>
<head>
<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="img/bible.png">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bíblia Sagrada</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="shortcut icon" href="img/bible.png">
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

.Topsearch {
    background-color: gray;
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    /* bottom: 0; */
    top: 0;
    height: 50;
    padding-top: 8;
    border:0
}

textarea:focus, input:focus, select:focus {
    box-shadow: 0 0 0 0;
    border: 0 none;
    outline: 0;
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

  .btn
{
  width: 50;
  height: 35;
  border-style: solid;
  background: white;  
  
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
  .btn
{
  width: 50;
  height: 35;
  border-style: solid;
  background: white;  
  
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

  .btn
{
  width: 50;
  height: 42;
  border-style: solid;
  background: white;  
  
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

<hr><hr><hr>
<div align="center">
<p></p>
<p></p>
<p></p>
<!-- <a href="#"><h3>Livros da Bíblia</h3></a> -->
<span><a href="#selecionarversao">Versão Selecionada:<b style="color:red"> <?php echo $_COOKIE['version']; ?></b></a></span>
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
  
 $sql = "SELECT ord, book, testament FROM biblias where `version`= '$version' group by ord order by ord";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 
 foreach($dados as $reg): 
    // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="font-size:16px"><button class="naoSelecionavel" style="width:100%;text-align:left;border:0; background:white; text-overflow: clip clip"> ' . $reg->book . '</button></a><br>';   
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '&v=' . $version .'" class="btn" style="font-size:17px;width:100%;text-align:left;text-overflow: clip clip;border:0" >' . $reg->book . '</a><br>';
  endforeach;
  ?> 
</div>

<!-- Complete books Names -->



<!-- abreviate books names -->
<div align="center" class="abr naoSelecionavel">
<?php
$sql = "SELECT abr, ord, book, testament FROM biblias where `version`= '$version' group by ord order by ord";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button class="btn-default"> ' . $reg->abr . '</button></a><br>';   
  if ($reg->testament == 1){
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" class="btn" style="font-size:17px;" >' . $reg->abr . '</a>';}
  // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button style="color:blue"  class="btn-default naoSelecionavel">' . $reg->abr . '</button></a>';}
  if ($reg->testament == 2){
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" class="btn" style="font-size:17px;color:blue" >' . $reg->abr . '</a>';}
endforeach;


?>
</div>
<!-- abreviate books names -->
</div >

<hr id="selecionarversao">

<!-- versions informations -->
<div style="font-size:16" id="versionsInfo">

<p >Versões</p>
<span > Escolha a versão para leitura clicando nos links abaixo</span><p></p>

(<a href="#"><span onClick="SetCookie('version','ARC69','365')" style="cursor:pointer"><b>ARC69</b></span></a>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Corrigida (1898, 1969).
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARC95','365')" style="cursor:pointer"><b>ARC95</b></span></a>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Corrigida (1898, 1995). 
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARF','365')" style="cursor:pointer"><b>ARF</b></span></a>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Corrigida e Revisada Fiel ao Texto Original - Sociedade Bíblica Trinitariana do Brasil. 
<p></p>
(<a href="#"><span onClick="SetCookie('version','AIB','365')" style="cursor:pointer"><b>AIB</b></span></a>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no Século XVII (ca. 1680) Edição Revisada pela Imprensa Bíblica Brasileira em 1967.
<p></p>
(<a href="#"><span onClick="SetCookie('version','TB','365')" style="cursor:pointer"><b>TB</b></span></a>) Bíblia Sagrada, traduzida entre os anos de 1902 e 1917, sob a coordenação do Rev. William Cabell Brown, erudito na área das línguas bíblicas, e Eduardo Carlos Pereira, famoso filólogo da Língua Portuguesa, ambos prestimosos colaboradores da obra bíblica no Brasil, a serviço da Sociedade Bíblica Britânica e Estrangeira (de Londres) e da Sociedade Bíblica Americana (de Nova Iorque).
<p></p>
(<a href="#"><span onClick="SetCookie('version','ARA','365')" style="cursor:pointer"><b>ARA</b></span></a>) Bíblia Sagrada, traduzida por João Ferreira de Almeida no século XVII (ca. 1680), Edição Revista e Atualizada (1959, 1993).
 <p></p>
(<a href="#"><span onClick="SetCookie('version','JER','365')" style="cursor:pointer"><b>JER</b></span></a>) A Bíblia de Jerusalém é a edição brasileira (1981, com revisão e atualização na edição de 2002) da edição francesa Bible de Jérusalem, que é assim chamada por ser fruto de estudos feitos pela Escola Bíblica de Jerusalém, em francês: École Biblique de Jérusalem.
 <p></p> 
(<a href="#"><span onClick="SetCookie('version','VC','365')" style="cursor:pointer"><b>VC</b></span></a>) Versão Católica, traduzida dos originais dos Monges de Maredsous (Bélgica) pelo Centro Bíblico Católico, revisada pelo Frei João José Pedreira de Castro em 1959.
<p></p>
(<a href="#"><span onClick="SetCookie('version','JND','365')" style="cursor:pointer"><b>JND</b></span></a>) A New translation from the original languages by J.N.DARBY
<p></p>
(<a href="#"><span onClick="SetCookie('version','KJV','365')" style="cursor:pointer"><b>KJV</b></span></a>) 1611 Authorised Version To the Most High and Mighty Prince JAMES, by the grace of God, King of Great Britian, France, and Ireland, Defender of the Faith.
</div>
</body>

<br><br>
<br><br>

<div class="Topsearch"  align="center">
<form action="busca.php?page=1">
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

  function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    window.scrollTo(0, 0); 
    location.reload();

	}

</script>