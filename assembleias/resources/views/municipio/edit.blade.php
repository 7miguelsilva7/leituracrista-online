@extends('layouts.app')
@section('title','Edit')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Município</div>

    <div class="panel-body">
    <a href="{!!url('municipio')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Voltar</a>
    <br>
    <form method = 'POST' action = '{!! url("municipio")!!}/{!!$municipio->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input id="codigo" name = "codigo" type="text" class="form-control" value="{!!$municipio->
            codigo!!}"> 
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" name = "nome" type="text" class="form-control" value="{!!$municipio->
            nome!!}"> 
        </div>
        <div class="form-group">
            <label for="uf">Estado</label>
            <input id="uf" name = "uf" type="text" class="form-control" value="{!!$municipio->
            uf!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection