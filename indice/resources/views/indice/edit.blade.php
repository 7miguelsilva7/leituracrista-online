@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit indice
    </h1>
    <form method = 'get' action = '{!!url("indice")!!}'>
        <button class = 'btn btn-danger'>indice Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("indice")!!}/{!!$indice->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="pergunta">pergunta</label>
            <input id="pergunta" name = "pergunta" type="text" class="form-control" value="{!!$indice->
            pergunta!!}"> 
        </div>
        <div class="form-group">
            <label for="link">link</label>
            <input id="link" name = "link" type="text" class="form-control" value="{!!$indice->
            link!!}"> 
        </div>
        <div class="form-group">
            <label for="tags">tags</label>
            <input id="tags" name = "tags" type="text" class="form-control" value="{!!$indice->
            tags!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection