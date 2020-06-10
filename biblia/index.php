<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bíblia Sagrada</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<style>
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
a:link{
text-decoration: none;
}
div
{
 font-size: 30px;
 line-height: 1.9;
}
div.book{
  columns: 150px 4;
}

</style>
</head>


<body>
   
<div align="center">
<a href="#"><h1>Livros da Bíblia</h1></a>
<hr>
</div>

<div align="CENTER">

<div align="left" class="book">

<?php
// Livro
  require_once 'dbconnect.php';  
 $sql = "SELECT ord, book, testament FROM biblias where `version`= 'ADO' group by ord order by ord";  
 $stm = $PDO->prepare($sql);  
 $stm->execute();  
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);  
 
 foreach($dados as $reg): 
    echo '<a href="cap.php?o=' . $reg->ord . '&b=' . $reg->book . '" style="font-size:16px"><button style="width:100%;text-align:left;border:0; background:white; text-overflow: clip clip"> ' . $reg->book . '</button></a><br>';   
 endforeach;
  ?> 
  </div>
  </div >

