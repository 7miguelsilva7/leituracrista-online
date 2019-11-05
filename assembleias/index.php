<html>
<head>
<!-- <script language="JavaScript" type="text/javascript" src="cidades-estados-utf8.js"></script>
<script src="select2.min.js"></script> -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/sorttable.js"></script>

<!-- select 2 -->
<link href="css/select2.min.css" rel="stylesheet" />
<script src="js/select2.min.js"></script>
<!-- End Select 2 -->

<style>
/* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: pointer;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</head>

<body>
<?php
include_once 'db_connect.php';
  
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
  $nivel_necessario = 1;
    
  // Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
      session_destroy();
  // Redireciona o visitante de volta pro login
      header("Location: login.php"); exit;
  }

if (!empty($_GET['origem'])){?>
<a href="logout.php">
<input style="position: absolute;top:20px;right:20" type="submit" value="Sair">
</a>  

<?php
include_once 'db_connect.php';

// lista municípios
$query_cidade = $connMysqli->query("SELECT Nome, Uf FROM `assemb_Municipio` m order by Nome");

?><div align="center">
<form action="" method="GET">
<select name="origem" class="js-example-basic-single" required>
<option value="">Por favor, selecione uma cidade</option>
<?

while($row_cidade = $query_cidade->fetch_assoc()){ 

echo '<option value="' . $row_cidade['Nome'] . ' ' . $row_cidade['Uf'] . '">' . $row_cidade['Nome'] . ' - ' . $row_cidade['Uf'] . '</option>';

}
?>

</select> 
<p>
<input type="submit" value="Pesquisar">
</form>
</div> 

<?
$i = 0;
$arr = array(
 'Alagoinha BA'
,'Americana SP'
,'Ametista do Sul RS'
,'Andirá PR'
,'Aracaju SE'
,'Araranguá SC'
,'Araras SP'
,'Atibaia SP'
,'Bagé RS'
,'Balneário Camboriú SC'
,'Barbacena MG'
,'Bauru SP'
,'Belém PA'
,'Belo Horizonte MG'
,'Belo Jardim PE'
,'Blumenau SC'
,'Boituva SP'
,'Bragança Paulista SP'
,'Brasília DF'
,'Butiá RS'
,'Cabo de Santo Agostinho PE'
,'Campinas SP'
,'Campo Grande MS'
,'Campos do Jordão SP'
,'Canaã dos Carajás PA'
,'Candiota RS'
,'Canoas RS'
,'Caraguatatuba SP'
,'Carapicuiba SP'
,'Cariacica ES'
,'Caruaru PE'
,'Cascavel PR'
,'Cassilândia MS'
,'Cuiabá MT'
,'Curitiba PR'
,'Duque de Caxias RJ'
,'Esteio RS'
,'Faria Lemos MG'
,'Fernandópolis SP'
,'Florianópolis SC'
,'Fortaleza CE'
,'Franca SP'
,'Goiânia GO'
,'Governador Valadares MG'
,'Guarapari ES'
,'Hortolândia SP'
,'Ibitinga SP'
,'Imperatriz MA'
,'Iporá GO'
,'Ipuã SP'
,'Itaguaí RJ'
,'Itumbiara GO'
,'Jacareí SP'
,'Jaciara MT'
,'João Pessoa PB'
,'Joinville SC'
,'Juazeiro do Norte CE'
,'Juiz de Fora MG'
,'Jundiaí SP'
,'Leme SP'
,'Limeira SP'
,'Londrina PR'
,'Lorena SP'
,'Macaé RJ'
,'Maceió AL'
,'Manaus AM'
,'Marabá PA'
,'Maravilha SC'
,'Marília SP'
,'Maringá PR'
,'Marmeleiro PR'
,'Mogi Guaçu SP'
,'Montes Claros MG'
,'Mossoró RN'
,'Natal RN'
,'Novo Hamburgo RS'
,'Olímpia SP'
,'Ouricuri PE'
,'Palmas TO'
,'Passos MG'
,'Paulista PE'
,'Petrolândia PE'
,'Petrolina PE'
,'Petrópolis RJ'
,'Pimenta Bueno RO'
,'Piracicaba SP'
,'Piraju SP'
,'Pontalina GO'
,'Porto Alegre RS'
,'Porto União SC'
,'Porto Velho RO'
,'Primavera (Rosana) SP)'
,'Recife PE'
,'Regente Feijó SP'
,'Ribeirão Preto SP'
,'Rio Claro SP'
,'Rio das Ostras RJ'
,'Rio de Janeiro RJ'
,'Rondonópolis MT'
,'Salto SP'
,'Salvador BA'
,'Santa Bárbara D Oeste SP'
,'Santa Bárbara D Oeste SP'
,'Santa Ernestina SP'
,'Santa Helena PR'
,'Santos SP'
,'São Gonçalo RJ'
,'São João do Caiuá PR'
,'São Joaquim da Barra SP'
,'São José do Rio Preto SP'
,'São Luís de Montes Belos GO'
,'São Luís MA'
,'Vila Mariana, São Paulo SP'
,'Patriarca, São Paulo SP'
,'Serrana SP'
,'Sertãozinho SP'
,'Sete Lagoas MG'
,'Sorocaba SP'
,'Taubaté SP'
,'Teresina PI'
,'Teresópolis RJ'
,'Timóteo MG'
,'Toledo PR'
,'Três Coroas RS'
,'Ubatuba SP'
,'Uberaba MG'
,'Uberlândia MG'
,'Umuarama PR'
,'Urânia SP'
,'Várzea Grande MT'
,'Vitória ES'
);
?>

 <!-- Verificar essas duas assembleis
 ,'Laranjal do Jari AP'
 ,'Macapá AP' -->

<br>
<div align="center">
<h3><?echo $_GET['origem'];?></h3>
</div>

<table class="sortable" id="sortdistance">
        <tr>
        <th>#</th>
        <th>Assembleias Próximas</th>
        <th>Distância</th>
        <th>Tempo de viagem (aproximado)</th>
        <th>Contatos</th>
<?

foreach ($arr as &$valuedestino) {
    $origin = $_GET['origem'];
    $busca = $origin;
    $destino = $valuedestino;
    $resultados = $destino;    

    $origin = str_replace(' ', '%20', $origin);
    $destino = str_replace(' ', '%20', $destino);

    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destino&mode=CAR&language=pt-BR&sensor=false&key=";

    $data = @file_get_contents($url);

    $result = json_decode($data, true);

    foreach($result['rows'] as $distance) {
        $i++;
        // echo '<br>';
        echo "<tr>
        <td>$i</td>  
        <td>Assembleia ou irmãos em <b>" . mb_strtoupper($resultados, 'UTF-8') .  "</b>:<td>" . '<span style="font-size:0.1px; color:white;">' .str_pad($distance['elements'][0]['distance']['value'] , 12 , '0' , STR_PAD_LEFT) . ' - </span>' . $distance['elements'][0]['distance']['text'] . '</td><td> ' . $distance['elements'][0]['duration']['text'] . ' no tráfego atual</td><td>asdf@gmail.com</td></tr>';
    } //if primeiro foreach
    ?>

<!-- Ordenar pela coluna de distância -->
<script>
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("sortdistance");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
</script>    <? 

  } //segundo foreach
?>

<!-- filtro em select -->
<script>
// $(document).ready(function() {
$(window).load(function() {
    $('.js-example-basic-single').select2();
});
</script>

<?
} //if $_GET['origem'] deferente de vazio
else
{
  include_once 'db_connect.php';
  
  // lista municípios
  $query_cidade = $connMysqli->query("SELECT Nome, Uf FROM `assemb_Municipio` m order by Nome");
  
  ?>
  
<a href="logout.php">
<input style="position: absolute;top:20px;right:20" type="submit" name="sair" value="Sair">
</a>  

  <div align="center">
  <form action="" method="GET">
  <select name="origem" class="js-example-basic-single" required>
  <option value="">Por favor, selecione uma cidade</option>
  <?
  
  while($row_cidade = $query_cidade->fetch_assoc()){ 
  
  echo '<option value="' . $row_cidade['Nome'] . ' ' . $row_cidade['Uf'] . '">' . $row_cidade['Nome'] . ' - ' . $row_cidade['Uf'] . '</option>';
  
  }
  ?>
  
  </select> 
  <p>
  <input type="submit" value="Pesquisar">
  </form>
  </div>

<!-- filtro em select -->
<script>
// $(document).ready(function() {
$(window).load(function() {
    $('.js-example-basic-single').select2();
});
</script>

  <?}?>