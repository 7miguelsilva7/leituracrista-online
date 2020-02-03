@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

    <div class="panel-body">   
			<h3>Editando ({{$user->name}})</h3>
			<a href="{!!url('user')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> <b> Voltar</b></a>

		<div class="box-body">
			<form action="{{url('user/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id" value = "{{$user->id}}">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name = "email" value = "{{$user->email}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Nome</label>
					<input type="text" name = "name" value = "{{$user->name}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Senha</label>
					<input type="password" name = "password" class = "form-control" placeholder = "password" required>
				</div>
				<button class = "btn btn-primary" type="submit">Atualizar</button>
			</form>
		</div>
	</div>
	<div class="row">
	<div class="panel-body">   

		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h4>{{$user->name}} </h4>Regras
				</div>
				<div class="box-body">
					<form action="{{url('user/addRole')}}" method = "post">
						{!! csrf_field() !!}
						<input type="hidden" name = "user_id" value = "{{$user->id}}">
						<div class="form-group">
							<select name="role_name" id="" class = "form-control" required>
								@foreach($roles as $role)
								<option value="{{$role}}">{{$role}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>Add regra</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>Role</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($userRoles as $role)
							<tr>
								<td>{{$role->name}}</td>
								<td>
								<a  class = 'delete btn btn-danger btn-xs' href="{{url('user/revokeRole')}}/{{str_slug($role->name,'-')}}/{{$user->id}}" ><i class = 'material-icons'> delete</i></a>
								</td>

							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h4>{{$user->name}} </h4>Permissions
				</div>
				<div class="box-body">
					<form action="{{url('user/addPermission')}}" method = "post">
						{!! csrf_field() !!}
						<input type="hidden" name = "user_id" value = "{{$user->id}}">
						<div class="form-group">
							<select name="permission_name" id="" class = "form-control"required>
								@foreach($permissions as $permission)
								<option value="{{$permission}}">{{$permission}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>Add permissão</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>Permission</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($userPermissions as $permission)
							<tr>
								<td>{{$permission->name}}</td>
								<td>
								<a  class = 'delete btn btn-danger btn-xs' href="{{url('user/revokePermission')}}/{{str_slug($permission->name,'-')}}/{{$user->id}}" ><i class = 'material-icons'> delete</i></a>

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
