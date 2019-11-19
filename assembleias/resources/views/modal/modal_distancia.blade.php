<html lang="en">
    <head>
    
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

</head>
<body>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title"><strong>Selecione Cidade de Origem</strong></h4>
</div>
<div class="modal-body">

<!-- Export alunos CSV-OMR -->
<form class="soTela" method="post" action="">
<input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<div class="form-group">
            <label>Cidade</label>
            <select name = 'origem' class = 'form-control js-example-basic-single' >
                @foreach($municipios as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>       
</div>

<input align="left" type="submit" name="verificar" value="Verificar" /> <p>
</form>

</div>
            
</body>



<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>