<html>
    
<head>
<meta property="og:type" content="bible">
<meta property="og:title" content="Bíblia Sagrada">
<meta property="og:description" content="Bíblia Sagrada Online, pesquise e compare versões">
<meta property="og:image" content="img/bible.png">
  <title>Busca</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/bible.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>


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

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
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

@media screen and (max-width: 2000px) {
  body {
  
  margin: 100px;
  margin-top: 10px;
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
  input, select, textarea{
      color: black;
      width:90%;
      font-size:20;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  body {
  
  margin: 15px;
  margin-top: 10px;
  }
}


p {
  font-size: 20px;
}

#divVersesTexts {
  font-size: 20px;


}


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
</style>

</head>

<body id="noScroll">
<?php


//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARF";
  // setcookie("version", '$version', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}

// book and cap get
$q = $_GET['q']; //book
?>

<br>
<br>

<h4> <a href="index.php"><< Voltar</a></h4>

<div align="center">
<div align="left">

<?php

?><br>

<?php

// connection
require_once 'dbconnect.php';  

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
$no_of_records_per_page = 10;
$offset = ($page-1) * $no_of_records_per_page;


// $total_pages_sql = "SELECT COUNT(book), text FROM biblias WHERE MATCH(text) AGAINST('$q') and version='ARA'";
$total_pages_sql = "SELECT COUNT(book), text FROM biblias WHERE MATCH(text) AGAINST('$q') 
and version='$version'";
$result = mysqli_query($mysqli,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
// echo $total_rows;
$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql = "SELECT ord, book, cap, verse, version, text FROM biblias WHERE MATCH(text) AGAINST('$q')
and version='$version' LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($res_data)){

  echo '
  <a href="text.php?o=' . $row['ord'] . '&b=' . $row['book'] . '&c=' . $row['cap'] . '&v=' . $row['version'] . '#verse' . $row['verse'] . '" style="font-size:18px">'.$row['book']. ' '.$row['cap'] . ':' . $row['verse'] .'</a>
  <div class="verseText" id="divVersesTexts">
  <span  id="verse'. $row['verse'] .'">' . $row['text'] . '</span></div></p><hr>';

}
mysqli_close($mysqli);
?>
<div align="center">
<ul class="pagination">
<li><a href="?page=1&q=<?php echo $q?>">Início</a></li>
<li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
  <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1).'&q='.$q; } ?>"><< Anterior</a>
</li>
<li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
  <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1).'&q='.$q; } ?>">Próximo >></a>
</li>
<li><a href="?page=<?php echo $total_pages.'&q='.$q; ?>">Fim</a></li>
</ul>
</div>
<!-- textos dos versiculo -->

</div>
</div>

<br><br>
<br><br>

<div class="Topsearch"  align="center">
<form action="busca.php?pageno=1">
  <input style="" name="q" value="<?php echo $q?>" autofocus placeholder="Busca">
</form>
</div>