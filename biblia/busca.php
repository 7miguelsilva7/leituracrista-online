<html>
    
<head>
  <title>Busca</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

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
</style>

</head>

<body id="noScroll">
<?php

require_once 'dbconnect.php';  

// book and cap get
$q = $_GET['q']; //book
?>

<div align="center">
<div align="left">

<?php

?><br>

<?php

  // connection
  require_once 'dbconnect.php';  

// textos dos versiculo
$sql = "SELECT ord, book, cap, verse, text FROM biblias WHERE MATCH(text) AGAINST('$q')
and version='ADO'
-- ORDER BY text
";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  // echo '<div style="cursor:pointer" id="divVersesTexts" ><a class="verseText" style="color:black" href="&verse='. $reg->verse .'"><sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . $reg->text . '</span></div></a></p>';

  echo '
  <a href="text.php?o=' . $reg->ord . '&b=' . $reg->book . '&c=' . $reg->cap . '&v=#verse' . $reg->verse . '" style="font-size:18px">'.$reg->book. ' '.$reg->cap.'</a></p>
  <div class="verseText" id="divVersesTexts">
  
  <sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . $reg->text . '</span></div></p><hr>';
endforeach;
?><!-- textos dos versiculo -->


</div>
</div>
