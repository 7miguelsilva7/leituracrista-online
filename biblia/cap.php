<html>
    
<head>
<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="img/bible.png">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/bible.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="main.css">

<style>

.naoSelecionavel {
    -webkit-touch-callout: none;  /* iPhone OS, Safari */
    -webkit-user-select: none;    /* Chrome, Safari 3 */
    -khtml-user-select: none;     /* Safari 2 */
    -moz-user-select: none;       /* Firefox */
    -ms-user-select: none;        /* IE10+ */
    user-select: none;            /* Possível implementação no futuro */
    /* cursor: default; */
}

.btn
{
  width: 50;
  height: 45;
  border-style: none;
  background: white;
  color: blue;  
}

span.livros{
  font-size: 18;
}

@media screen and (max-width: 2000px) {
  body {
  
  margin: 100px;
  margin-top: 10px;
  }
}

@media screen and (max-width: 800px) {
  body {
  
  margin: 50px;
  margin-top: 10px;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  body {
  
  margin: 1px;
  margin-top: 10px;
  }
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
/* div.cap{
  columns: 50px 10;
} */
</style>

</head>

<body>
  
<!-- <div align="center">
<a href="../biblia/"><button>Livros</button></a>
</div>
<br> -->

<div align="center">

<?php
 require_once 'dbconnect.php';  

// book and cap get
$b = $_GET['b']; //book
$o = $_GET['o']; //Ordem

echo '<h2>' . $b . '</h2>';

echo '<title>' . $b . '</title>';


?><br>
<div align="center" class="cap naoSelecionavel">
 <?php

// connetion
require_once 'dbconnect.php';  
$sql = "SELECT book, ord, cap, version FROM biblias 
where `version`= 'ARC69' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
// $rowcount =  $stm->rowCount();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
   echo '<a href="text.php?o=' . $o . '&b=' . $b . '&c=' . $reg->cap . '&v=' . $reg->version .'" style="line-height: 2;font-size:20px" class="btn">' . $reg->cap . '</a>';
endforeach;
?>
</div>
</div>


<!-- barra de navegação -->
<script>
  function book(){
  window.location.href = "../biblia/"
  }

</script>
<br>
<br>
<div class="footerbackground"></div>

<div onclick='book();' class="footerbackCap">
  <span class="livros" >Livros</span>
</div>