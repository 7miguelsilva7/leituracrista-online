@extends('layouts.app')
@section('title','Show')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Município</div>

    <div class="panel-body">
    <br>
    <a href='{!!url("municipio")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Voltar</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>#</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td> <b>Codigo</b> </td>
                <td>{!!$municipio->codigo!!}</td>
            </tr>
            <tr>
                <td> <b>Nome</b> </td>
                <td>{!!$municipio->nome!!}</td>
            </tr>
            <tr>
                <td> <b>Estado</b> </td>
                <td>{!!$municipio->uf!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection