@extends('layouts.app')
@section('title','Create')
@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Assembleia </div>

    <div class="panel-body">    
    <a href="{!!url('assembleia')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> <b> Cancelar</b></a>
    <br>
    <form method = 'POST' action = '{!!url("assembleia")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="endereco_reuniao">Endereço de Reunião</label>
            <input id="endereco_reuniao" name = "endereco_reuniao" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <select name = 'municipio_id' class = "form-control js-example-basic-single" required>
                @foreach($municipios as $municipio) 
                <option value="{!!$municipio->id!!}">{!!$municipio->uf!!} - {!!$municipio->nome!!}</option>
                @endforeach 
            </select>            
        </div>
        <div class="form-group">
            <label for="cep">Cep</label>
            <input id="cep" name = "cep" type="text" class="form-control" required>
        </div>
        
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Savar</button>
    </form>
</section>

@endsection