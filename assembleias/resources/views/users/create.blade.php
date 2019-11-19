@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Usuário </div>

    <div class="panel-body">   
		<a href="{!!url('user')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> <b> Cancelar</b></a>

		<div class="box-body">
			<form action="{{url('user/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name = "email" class = "form-control" placeholder = "Email">
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>

												<div class="form-group">
                            <label for="fone1" class="col-md-4 control-label">Fone 1</label>
                                <input id="fone1" type="text" class="form-control" name="fone1" value="{{ old('fone1') }}" required >
                        </div>

												<div class="form-group">
                            <label for="fone2" class="col-md-4 control-label">Fone 2</label>
                                <input id="fone2" type="text" class="form-control" name="fone2" value="{{ old('fone2') }}" required >

                        </div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name = "password" class = "form-control" placeholder = "Password">
				</div>
				<button class = "btn btn-primary" type="submit">Create</button>
			</form>
		</div>
	</div>
</section>
@endsection
