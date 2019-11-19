@extends('layouts.app')
@section('title','Index')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

    <div class="panel-body">
		<a href="{{url('/user/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> NOVO</a>
		<table class = "table table-hover">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th>Permissions</th>
			<th>Actions</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Roles</small>
				@endif
				</td>
				<td>
				@if(!empty($user->permissions))
					@foreach($user->permissions as $permission)
					<small class = 'label bg-orange'>{{$permission->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Permissions</small>
				@endif
				</td>
				<td>
					<!-- <a href="{{url('/scaffold-users/edit')}}/{{$user->id}}" class = 'viewEdit btn btn-primary btn-xs'><i class="material-icons" aria-hidden="true"></i></a>
					<a href="{{url('scaffold-users/delete')}}/{{$user->id}}" class = "delete btn btn-danger btn-xs"><i class="material-icons" aria-hidden="true"></i></a> -->

					<a  class = 'delete btn btn-danger btn-xs' href="/user/{!!$user->id!!}/delete" ><i class = 'material-icons'> delete</i></a>
                    <a  class = 'viewEdit btn btn-primary btn-xs' href = "/user/{!!$user->id!!}/edit"><i class = 'material-icons'> edit</i></a>

				
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
