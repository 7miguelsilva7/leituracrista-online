<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<a href="/hinos_espanhol/"><button>Índice</button></a>

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
  
div.a {
  font-size: 15px;
}

div.b {
  font-size: large;
}

div.c {
  font-size: 150%;
}
</style>

<div class="alert-box success">Successful Alert !!!</div>

<?php

// hino get
$hino = $_GET['hino'];


// titulo
  require_once 'dbconnect.php';  

 $sql = "SELECT h.hino, h.titulo, h.metrica, h.descricao FROM hinos_espanhol h
 inner join estrofes_espanhol e on e.hino=h.hino
 where h.hino = $hino
 LIMIT 1
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  

  echo '<div class="c" align="center">' . $hino . ' - <b>' . $reg->titulo . '</b></div>';   
  echo '<div class="b" align="center">' . $reg->metrica . '</b></div>';   
  echo '<div class="b" align="center">' . $reg->descricao . '</b></div>';   
       
  endforeach;

  ?>
  <br>
  
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
 ";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 foreach($dados as $reg):  

    if ($reg->refrao == 1){ echo '<i style="color:blue">' ;}
    echo '<div class="c" align="center">' . $reg->estrofe . '</div><p>';
    if ($reg->refrao == 1){ echo '</i>' ;}
       
  endforeach;

?> 

<script>
 function copyDivToClipboard() {
                    var range = document.createRange();
                    range.selectNode(document.getElementById("divText"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
//                     alert('Estrofe Copiada!')
$( "#success-btn" ).click(function() {
$( "div.success" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
});
                }
</script> 
