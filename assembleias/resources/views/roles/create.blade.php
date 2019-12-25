@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Regras:</div>

    <div class="panel-body">
			<h3>Criar Regras</h3>
		<div class="box-body">
			<form action="{{url('role/store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for="">Regras</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Criar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
