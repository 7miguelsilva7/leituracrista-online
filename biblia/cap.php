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

<style>
body {
  
  margin: 50px;
  }

/* css copiar texto */
.cap {
  font-size: 20px;
  line-height: 1.9;
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

</head>

<body>
  
<a href="../biblia/"><button>Livros</button></a>

<br>
<br>

<div class="cap">

<?php
 require_once 'dbconnect.php';  

// book and cap get
$b = $_GET['b']; //book
$o = $_GET['o']; //Ordem

echo '<h4>' . $b . '<h4>';

// Livro
require_once 'dbconnect.php';  
$sql = "SELECT book, ord, cap FROM biblias 
where `version`= 'ADO' and ord=$o
group by cap";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
   echo '<a href="cap.php?c=' . $reg->cap . '" style="font-size:16px"> ' . $reg->cap . '&nbsp;&nbsp;&nbsp;&nbsp;</a>';   
      
endforeach;
?>
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

<script>
// $( ".DivSuccess" ).click(function() {
// $( "div.success" ).fadeIn( 50 ).delay( 1000 ).fadeOut( 100 );
// });
</script>
