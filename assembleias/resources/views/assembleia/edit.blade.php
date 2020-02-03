@extends('layouts.app')
@section('title','Edit')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Assembleia </div>

    <div class="panel-body"> 
    <a href="{!!url('assembleia')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> <b> Voltar</b></a>
    <br>
    <form method = 'POST' action = '{!! url("assembleia")!!}/{!!$assembleia->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="endereco_reuniao">Endereço de Reuniao</label>
            <input id="endereco_reuniao" name = "endereco_reuniao" type="text" class="form-control" value="{!!$assembleia->
            endereco_reuniao!!}"> 
        </div>
        <div class="form-group">
            <label>Cidade</label>
            <select name = 'municipio_id' class = "form-control js-example-basic-single" required>
                <option value="{!!$assembleia->municipio->id!!}">{!!$assembleia->municipio->nome!!}</option>
                @foreach($municipios as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="cep">Cep</label>
            <input id="cep" name = "cep" type="text" class="form-control" value="{!!$assembleia->
            cep!!}">
        </div>

        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Atualizar</button>
    </form>
</section>  
@endsection