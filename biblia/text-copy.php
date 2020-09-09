<!DOCTYPE html>

<?php
$tomorrow_cookie  = mktime (0, 0, 0, date("m")  , date("d"), date("y")+5);
//verifica se o cookie está definido
if(!isset($_COOKIE['version'])) { // verifica se o cookie está definido
  $version="ARA";
  // setcookie("version", 'ARA', $tomorrow_cookie);
} else {
  $version=$_COOKIE['version'];
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

a { text-decoration: none; }

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  /* height: 300px; */
}

.left {
  width: 15%;
  overflow: auto;
  max-height: 88vh;}

.right {
  width: 85%;
  overflow: auto;
  max-height: auto;
}

.rightCap {
  width: 85%;
  overflow: auto;
  max-height: auto;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




</style>
</head>
<body>

<?php

require_once 'dbconnect.php';  

// book and cap get
$b = $_GET['b']; //book
$c = $_GET['c']; //cap
$o = $_GET['o']; //Order
$v = $_GET['v']; //Order
echo '<title>' . $b . ' ' . $c . '</title>';


// conta qtd capítulos
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= '$version' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$rowcount =  $stm->rowCount();
// conta qtd capítulos
?>

<div class="row">
  <div class="column left" style="background-color:#eee;" >
    <span><b><? echo '('. $version .')<br>'. $b; ?></b></span><br><br>
        <button><img id="resetFont" style="width:17px;cursor:pointer" title="Restaurar fonte" src="img/reset.png" alt="Restauar Fonte"></button>
        <button name="decrease-font" id="btnDiminuir" title="Diminuir fonte">A <sup>-</sup></button> 
        <button name="increase-font" id="btnAumentar" title="Aumentar fonte">A <sup>+</sup></button> 
  </div>

  <div class="column rightCap" style="background-color:#eee;">
    <span>Capítulo: </span>
<?php
$sql = "SELECT book, ord, cap, version FROM biblias 
where `version`= '$version' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
// $rowcount =  $stm->rowCount();
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
   echo '<a href="text-copy.php?o=' . $o . '&b=' . $b . '&c=' . $reg->cap . '&v=' . $reg->version .'" style="line-height: 1;font-size:15px" class="btn"> ' . $reg->cap . ' </a>';
endforeach;
?>
  </div>
</div>

<div class="row">
  <div class="column left" style="background-color:#eee;">
<?php
$sql = "SELECT abr, ord, book, testament, version FROM biblias where `version`= '$version' group by ord order by ord";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):
  // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button class="btn-default"> ' . $reg->abr . '</button></a><br>';   
  if ($reg->testament == 1){
    echo '<a href="text-copy.php?o=' . $reg->ord . '&b=' . $reg->book . '&c=1' . '&v=' . $reg->version . '" class="btn" style="font-size:17px;" >' . $reg->book . '</a><br>';}
  // echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="line-height: 2;font-size:20px;"><button style="color:blue"  class="btn-default naoSelecionavel">' . $reg->abr . '</button></a>';}
  if ($reg->testament == 2){
    echo '<a href="text-copy.php?o=' . $reg->ord . '&b=' . $reg->book . '&c=1' . '&v=' . $reg->version . '" class="btn" style="font-size:17px;color:blue" >' . $reg->book . '</a><br>';}
endforeach;
?>
</div>

  <div class="column right" style="background-color:white;">
<?
$sql = "SELECT book, ord, cap, sum(cap) as totalCaps, verse, abr, text, pgrph FROM biblias 
where `version`= '$version' 
and ord=$o
and cap=$c
group by `verse`";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  $totalCaps = $reg->totalCaps;
  // echo '<div class="verseText"  style="cursor:pointer" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');"><sup>'. $reg->abr . ' ' . $reg->cap . ':</sup><sup>' . $reg->verse . '</sup><span  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></div></a></p>';
  echo '<div  style="cursor:pointer;font-size:20px;" id="divVersesTexts" onclick="localStorage.setItem(\'verseInterlinear\',\''. $reg->verse .'\');highlightVerseText();"><p class="verseTextP"><span class="verseText"><span style="color:blue;">'. $reg->abr . ' ' . $reg->cap . ':' . $reg->verse . '</span></span><span  id="verse'. $reg->verse .'">' . ' ' . $reg->pgrph . $reg->text . '</span></p></div>';
endforeach;
?>
  </div>
</div>

</body>
</html>
