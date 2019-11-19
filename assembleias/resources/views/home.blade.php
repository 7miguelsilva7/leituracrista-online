@extends('layouts.app')
@section('title','Index')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assembleias Próximas de:</div>

    <div class="panel-body">
    
    <div class="form-group">
    <form action="">
            <label>Cidade</label>
            <select name = 'origem' class = "form-control js-example-basic-single" required>
                <option value="">Selecione uma Cidade</option>
                @foreach($municipios as $municipio) 
                <option value="{!!$municipio->uf!!} {!!$municipio->nome!!}">{!!$municipio->uf!!} - {!!$municipio->nome!!}</option>
                @endforeach 
            </select> <p></p>
            <input type="submit" value="Consultar">
    </form>          
    </div>

<?if (!empty($_GET['origem'])){?>

<!-- put name of cities on array -->
@foreach($assembleias as $assembleia)
<? $cidades[] = $assembleia->municipio->nome . ' - ' . $assembleia->municipio->uf?>
@endforeach

<?php 
$i = 0;
$arr = $cidades
?> 


 <!-- Verificar essas duas assembleis
 ,'Laranjal do Jari AP'
 ,'Macapá AP' -->
<div align="center">
<h3><?echo $_GET['origem'];?></h3>
</div>

<div id="loader"></div>
<table class="sortable table table-striped table-bordered table-hover" id="sortdistance" style = 'background:#fff'>
        <tr>
        <th>#</th>
        <th>Assembleias Próximas</th>
        <th>Distância</th>
        <th>(Aprox.)</th>
        <th>Contatos</th>
<?

foreach ($arr as $valuedestino) {
    $origin = $_GET['origem'];
    $busca = $origin;
    $destino = $valuedestino;
    $resultados = $destino;   

    $origin = str_replace(' ', '%20', $origin);
    $destino = str_replace(' ', '%20', $destino);

    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destino&mode=CAR&language=pt-BR&sensor=false&key=AIzaSyCwF2xEA7CGH6iA_Uiv-BTy1qlA1wwgER8";

    $data = @file_get_contents($url);

    $result = json_decode($data, true);

    foreach($result['rows'] as $distance) {
        $i++;
        // echo '<br>';
        echo "<tr>
        <td>$i</td>  
        <td>" . mb_strtoupper($resultados, 'UTF-8') .  "</b>:<td>" . '<span style="font-size:0.1px; color:white;">' .str_pad($distance['elements'][0]['distance']['value'] , 12 , '0' , STR_PAD_LEFT) . ' - </span>' . $distance['elements'][0]['distance']['text'] . '</td><td> ' . $distance['elements'][0]['duration']['text'] . '</td><td>contato@gmail.com</td></tr>';
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
</script>    

<script type="text/javascript">
		// Este evendo é acionado após o carregamento da página
		jQuery(window).load(function() {
			//Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
			jQuery("#loader").fadeOut("slow");
		});
	</script>

<? 
  } //segundo foreach
} //verifica se vazio
?>











<!-- <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Endereço de Reuniões</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($assembleias as $assembleia) 
            <tr>
                <td>{!!$assembleia->endereco_reuniao!!}</td>
                <td>{!!$assembleia->municipio->nome!!}</td>
                <td>{!!$assembleia->municipio->uf!!}</td>
                
                <td>
           
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/assembleia/{!!$assembleia->id!!}'><i class = 'material-icons'> info</i></a>

                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $assembleias->render() !!} -->

</section>
@endsection