@extends('layouts.app')
@section('title','Show')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assembleia </div>

    <div class="panel-body"> 
    <br>
    <a href='{!!url("assembleia")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i> <b> Voltar</b></a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>#</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td> <b>Endereço de Reuniao</b> </td>
                <td>{!!$assembleia->endereco_reuniao!!}</td>
            </tr>
            <!-- <tr>
                <td>
                    <b><i>codigo : </i></b>
                </td>
                <td>{!!$assembleia->municipio->codigo!!}</td>
            </tr> -->
            <tr>
                <td>
                    <b><i>Cidade : </i></b>
                </td>
                <td>{!!$assembleia->municipio->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Estado : </i></b>
                </td>
                <td>{!!$assembleia->municipio->uf!!}</td>
            </tr>
             <tr>
                <td>
                    <b><i>Cep : </i></b>
                </td>
                <td>{!!$assembleia->cep!!}</td>
            </tr>
          <!--  <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$assembleia->municipio->updated_at!!}</td>
            </tr> -->
        </tbody>
    </table>
</section>
@endsection