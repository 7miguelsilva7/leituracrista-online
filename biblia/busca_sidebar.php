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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>
hr { margin:  10px 10px; }
a {
    color:blue;
    text-decoration: none;
    cursor:pointer;
    }
</style>

</head>

<body id="noScroll">
<?php
$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARF";
  // setcookie("version", 'ARA', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}

// book and cap get
$q = $_POST['txtsearch']; //book
?>

<br>
<br>

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
and version='ARA'";
$result = mysqli_query($mysqli,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
// echo $total_rows;
$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql = "SELECT ord, book, cap, verse, version, text FROM biblias WHERE MATCH(text) AGAINST('$q')
and version='ARA' LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($res_data)){

  echo '
  <a onClick="getCapsAndText(\'' . $version . '\','. $row['ord'] .',\''. $row['book'] . '\','. $row['cap'] .');setUrl(\'' . $version . '\','. $row['ord'] .','. $row['cap'] .',\'' . $row['book'] . '\')"
  style="font-size:18px">'.$row['book']. ' '.$row['cap'].'</a></p>
  <div class="verseText" id="divVersesTexts">
  ' . $row['verse'] . '<span class="verseTextP" style="font-size:20px"  id="verse'. $row['verse'] .'">' . $row['text'] . '</span></div></p><hr>';

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