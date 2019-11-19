@extends('layouts.app')
@section('title','Index')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Município</div>

    <div class="panel-body">

    <a href='{!!url("municipio")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> NOVO</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($municipios as $municipio) 
            <tr>
                <td>{!!$municipio->codigo!!}</td>
                <td>{!!$municipio->nome!!}</td>
                <td>{!!$municipio->uf!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/municipio/{!!$municipio->id!!}/deleteMsg" ><i class = 'material-icons'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/municipio/{!!$municipio->id!!}/edit'><i class = 'material-icons'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/municipio/{!!$municipio->id!!}'><i class = 'material-icons'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $municipios->render() !!}

</section>
@endsection