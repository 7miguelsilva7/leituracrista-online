@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Permissões:</div>

    <div class="panel-body">
			<h3>Permissões</h3>
		<div class="box-body">
			<a href="{{url('permission/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Add</a>
			<table class="table table-striped">
				<head>
					<th>Permission</th>
					<th>Actions</th>
				</head>
				<tbody>
					@foreach($permissions as $permission)
					<tr>
						<td>{{$permission->name}}</td>
						<td>
							<a  class = 'viewEdit btn btn-primary btn-xs' href = "{{url('/permission/edit')}}/{{$permission->id}}"><i class = 'material-icons'> edit</i></a>
							<a  class = 'delete btn btn-danger btn-xs' href="{{url('/permission/delete')}}/{{$permission->id}}" ><i class = 'material-icons'> delete</i></a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
