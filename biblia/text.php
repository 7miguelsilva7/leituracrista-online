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


@media screen and (max-width: 992px) {
  body {
  
  margin: 200px;
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
  font-size: 18px;


}

span {
  font-size: 11px;
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

<body>
<?php

require_once 'dbconnect.php';  

// book and cap get
$b = $_GET['b']; //book
$c = $_GET['c']; //cap
$o = $_GET['o']; //Order
?>

<div align="center">
<a href="../biblia/"><button>Livros</button></a>
<a href="cap.php?o=<?php echo $o . '&b=' . $b ?>"><button>Capítulos</button></a>
</div>
<br>

<div align="center">

<div align="left">

<?php

echo '<title>' . $b . ' ' . $c . '</title>';
echo '<h2>' . $b . ' ' . $c . '</h2>';

?><br><?php

// Livro
require_once 'dbconnect.php';  
$sql = "SELECT book, ord, cap, verse, text FROM biblias 
where `version`= 'ADO' 
and ord=$o
and cap=$c
group by `verse`";  
$stm = $PDO->prepare($sql);  
$stm->execute();  
$dados = $stm->fetchAll(PDO::FETCH_OBJ);  
foreach($dados as $reg):  
  // echo '<a href="cap.php?c=' . $reg->cap . '" style="line-height: 2;font-size:20px"> ' . $reg->cap . '&nbsp;&nbsp;&nbsp;&nbsp;</a>';   
  echo '<p><span>' . $reg->verse . '</span> ' . $reg->text . '</p>';   
      
endforeach;
?>
</div>
</div>

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
