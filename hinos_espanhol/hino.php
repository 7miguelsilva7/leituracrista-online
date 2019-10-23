<html>
    
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


</head>


<a href="../hinos_espanhol/"><button>Índice</button></a>

<style>
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
  
span.a {
  font-size: 15px;
}
span.b {
  font-size: large;
}
span.c {
  font-size: 150%;
}
</style>


<?php
 require_once 'dbconnect.php';  

// hino get
$hino = $_GET['hino'];

// titulo
 $sql = "SELECT h.hino, h.titulo, h.metrica, h.descricao FROM hinos_espanhol h
 inner join estrofes_espanhol e on e.hino=h.hino
 where h.hino = $hino
 LIMIT 1
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  
  echo '<div align="center"><span class="c" >' . str_pad($hino, 3, 0, STR_PAD_LEFT) . '<br><b>' . $reg->titulo . '</b></span> </div>';   
  echo '<div align="center"><span class="b" >' . $reg->metrica;
   if ($reg->descricao==''){}else{ echo ' - ' . $reg->descricao;}
  echo '</span></div>';
       
  endforeach;
  ?>
  <br>

  <div style="position:fixed; right:10px; top:10px" class="alert-box success">Copiado!!!</div>

  <?
  // hino
  require_once 'dbconnect.php';  
 $sql = "SELECT `hino`
 ,`estrofe` as estrofeid
 ,GROUP_CONCAT(`linha` SEPARATOR '<br>') as estrofe
 ,`refrao` 
 FROM `estrofes_espanhol` 
 where hino = $hino
 group by estrofe, hino 
 order by estrofe
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  
    if ($reg->refrao == 1){ echo '<i style="color:blue">' ;}
    echo '<div align="center">' . $reg->estrofeid . '. <span onclick="copyDivToClipboard' . $reg->estrofeid . '()" style="cursor:pointer" class="c DivSuccess" id="divText' . $reg->estrofeid . '"   >' . $reg->estrofe . '</span></div><p>';
    if ($reg->refrao == 1){ echo '</i>' ;}?>

    <script>
    function copyDivToClipboard<?echo $reg->estrofeid?>() {
                        var range = document.createRange();
                        range.selectNode(document.getElementById("divText<?echo $reg->estrofeid?>"));
                        window.getSelection().removeAllRanges(); // clear current selection
                        window.getSelection().addRange(range); // to select text
                        document.execCommand("copy");
                        window.getSelection().removeAllRanges();// to deselect
    //                     alert('Estrofe Copiada!')
                        $( "div.success" ).fadeIn( 50 ).delay( 1000 ).fadeOut( 100 );
    
          }
    </script> 
<?
 endforeach;
?> 



<script>
// $( ".DivSuccess" ).click(function() {
// $( "div.success" ).fadeIn( 50 ).delay( 1000 ).fadeOut( 100 );
// });
</script>
