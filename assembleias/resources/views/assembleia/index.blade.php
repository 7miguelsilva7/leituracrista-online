@extends('layouts.app')
@section('title','Index')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assembleias</div>

    <div class="panel-body">
    
    @role('admin')
    <a href='{!!url("assembleia")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> <b> NOVO</b></a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associar <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href='{!!url("assembleia")!!}/municipio'>Cidade</a></li>
        </ul>
    </div>
    @endrole

    <br>
                        <div class="navbar-form navbar-right">
                            <form action='{!!url("assembleia")!!}' method="get">
                                <!-- {{ csrf_field() }} -->
                                <label class="control-label">Pesquisar</label>

                                <input type="search" class="form-control input-sm" name="search" value="{{ $search }}">

                                <button type="submit" class="btn btn-primary btn-xs" title="Pesquisar">
                                    <span ><i class="material-icons">
search
</i></span>
                                </button>
                            </form>
                        </div>


    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
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
                @role('admin')
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/assembleia/{!!$assembleia->id!!}/deleteMsg" ><i class = 'material-icons'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/assembleia/{!!$assembleia->id!!}/edit'><i class = 'material-icons'> edit</i></a>
                @endrole
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/assembleia/{!!$assembleia->id!!}'><i class = 'material-icons'> info</i></a>

                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    <!-- {!! $assembleias->render() !!} -->
    {{ $assembleias->appends(['search' => $search])->links() }}


</section>
@endsection