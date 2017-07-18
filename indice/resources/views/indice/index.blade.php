@extends('layouts.app')

@section('content')
    <!--<div class="container">-->
        <div class="col-sm-offset-0 col-sm-12">
            

            <!-- Current indices -->
            @if (count($indices) > 0)
                <!--<div class="panel panel-default">-->
                    <!--<div class="panel-heading">
                        Perguntas
                    </div>-->

                    <div align="center" class="panel-body">
                 <!-- New indice Form -->


{!! Form::open(['method'=>'get','url'=>'indice','class'=>'navbar-form navbar-center','role'=>'search'])  !!}

<div  class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Digite um tema">
    <span  class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
</div>
{!! Form::close() !!}                     
                        <table class="table table-striped table-hover table-condensed indice-table">
                           
                            <tbody>
                                @foreach ($indices as $indice)
                                    <tr>
                                        <td align="center" class="table-text"><div><a target="_blank" href="{{ $indice->link }}"><h4>{{ $indice->pergunta }}<h4></a></div></td>

                                        <!-- indice Delete Button -->
                                        <td>
                                            <form action="{{ url('indice/'.$indice->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <!--<button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete-->
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else

<div class="panel panel-default">
                    <!--<div class="panel-heading">
                        Perguntas
                    </div>-->

                    <div  align="center" class="panel-body">
                 <!-- New indice Form -->
{!! Form::open(['method'=>'get','url'=>'indice','class'=>'navbar-form navbar-center','role'=>'search'])  !!}

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Busca">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
</div>
{!! Form::close() !!}                     
                        <table class="table table-striped indice-table">
                           
                            <tbody>
                                    <tr>
                                        <td align="center" class="table-text"><div>
                                            <h4>Sem resultados para sua pesquisa.</h4>
                                        </div></td>

                                        <!-- indice Delete Button -->
                                        <td>
                                           
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            @endif

        </div>
    </div>
@endsection
