@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show indice
    </h1>
    <br>
    <form method = 'get' action = '{!!url("indice")!!}'>
        <button class = 'btn btn-primary'>indice Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>pergunta : </i></b>
                </td>
                <td>{!!$indice->pergunta!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>link : </i></b>
                </td>
                <td>{!!$indice->link!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tags : </i></b>
                </td>
                <td>{!!$indice->tags!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection