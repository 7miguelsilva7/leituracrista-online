@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Permissões:</div>

    <div class="panel-body">
			<h3>Editar Permissões</h3>
		<div class="box-body">
			<form action="{{url('permission/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "permission_id" value = "{{$permission->id}}">
				<div class="form-group">
				<label for="">permission</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name" value = "{{$permission->name}}">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Update</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
