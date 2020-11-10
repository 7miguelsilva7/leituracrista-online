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
<?
$q = $_POST['txtsearch']; //book
?>
<script>
  $('#Caps').html('<span style="font-size:20px" >Resultados para  <?php echo '<span style="color:blue;">"' . $q .'"</span></span>'?>');
</script>

<?php
$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARF";
  // setcookie("version", '$version', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}

// book and cap get
?>

<div align="center">
<div align="left">

<?php

?><br>

<?php

// connection
require_once 'dbconnect.php';  

if (isset($_POST['page'])) {
  $page = $_POST['page'];
} else {
  $page = 1;
}
$no_of_records_per_page = 10;
$offset = ($page-1) * $no_of_records_per_page;


// $total_pages_sql = "SELECT COUNT(book), text FROM biblias WHERE MATCH(text) AGAINST('$q') and version='$version'";
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
  <a onClick="getCapsAndText(\'' . $version . '\','. $row['ord'] .',\''. $row['book'] . '\','. $row['cap'] .');setUrl(\'' . $version . '\','. $row['ord'] .','. $row['cap'] .',\'' . $row['book'] . '\');localStorage.setItem(\'verse\',\''. $row['verse'] .'\')"
  style="font-size:18px">'.$row['book']. ' '.$row['cap']. ':' . $row['verse'] .'&nbsp;</a>
  <div class="verseText" id="divVersesTexts">
  <span class="verseTextP resultado" style="font-size:20px"  id="verse'. $row['verse'] .'">' . $row['text'] . '</span></div></p><hr>';

}
mysqli_close($mysqli);
?>
<div align="center">
<ul class="pagination">
<li><a onclick="start()">Início</a></li>
<li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
  <a onclick="backpage()" ><< Anterior</a>
</li>
<li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
  <a  onclick="forward()" >Próximo >></a>
</li>
<li><a onclick="end()" >Fim</a></li>
</ul>
</div>
<!-- textos dos versiculo -->

</div>
</div>

<script>
function backpage(){
    event.preventDefault();
    var page = '<?php echo $page?>'
    if( page <= 1){ } else{
    var q = '<?php echo $q ?>'
    var p = '<?php echo $page - 1 ?>'
    $("#Text").load("busca_sidebar.php", {"txtsearch": q, "page": p });
    $('html, body').animate({scrollTop: 0}, 'fast');
    return false;

    }
};

function forward(){
    event.preventDefault();
    var page = '<?php echo $page?>'
    var total_pages = '<?php echo $total_pages?>'
    if( page == total_pages){ } else {
    var q = '<?php echo $q ?>'
    var p = '<?php echo $page + 1 ?>'
    $("#Text").load("busca_sidebar.php", {"txtsearch": q, "page": p });
    $('html, body').animate({scrollTop: 0}, 'fast');
    return false;

    }
};

function end(){
    event.preventDefault();
    var total_pages = '<?php echo $total_pages?>'
    var q = '<?php echo $q ?>'
    $("#Text").load("busca_sidebar.php", {"txtsearch": q, "page": total_pages });
    $('html, body').animate({scrollTop: 0}, 'fast');
    return false;
}

function start(){
    event.preventDefault();
    var q = '<?php echo $q ?>'
    $("#Text").load("busca_sidebar.php", {"txtsearch": q, "page": 1 });
    $('html, body').animate({scrollTop: 0}, 'fast');
    return false;

}

$(document).ready(function(){
$('html, body').animate({scrollTop: 0}, 'fast');
})

$q = '<?php echo $q ?>'
var searchTerm = $q.split(" ");
 
$(".resultado").each(function() {
    var html = $(this).html().toString();
    for(var i = 0; i < searchTerm.length; i++) {
        var pattern = "([^\w]*)(" + searchTerm[i] + ")([^\w]*)";
        var rg = new RegExp(pattern);
        var match = rg.exec(html);
        if(match) {
            html = html.replace(rg,match[1] + '<b style="color:red">'+ match[2] +'</b>' + match[3]);
            $(this).html(html);
        }
    }
});
</script>

<br><br>
<br><br>