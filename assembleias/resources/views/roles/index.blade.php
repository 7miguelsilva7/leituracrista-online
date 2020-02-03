@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Regras:</div>

    <div class="panel-body">
    
    <div class="form-group">
			<a href="{{url('role/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Add</a>
			<table class="table table-striped">
				<head>
					<th>Regras</th>
					<th>Ações</th>
				</head>
				<tbody>
					@foreach($roles as $role)
					<tr>
						<td>{{$role->name}}</td>
						<td>
							<a  class = 'viewEdit btn btn-primary btn-xs' href = "{{url('/role/edit')}}/{{$role->id}}"><i class = 'material-icons'> edit</i></a>
							<a  class = 'delete btn btn-danger btn-xs' href="{{url('/role/delete')}}/{{$role->id}}" ><i class = 'material-icons'> delete</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
