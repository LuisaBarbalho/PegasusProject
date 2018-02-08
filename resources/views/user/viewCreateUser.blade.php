@extends ('templates.templateMenu')

@section('content')


<form class="form" method="post" action="#">
{!! csrf_field() !!}

  <div class="form-group">
		<input type="text" name="nome" placeholder="Nome" class="form-control">
	</div>

  <div class="form-group">
		<input type="text" name="cpf" placeholder="CPF" class="form-control">
	</div>

	<div class="form-group">
		<input type="text" name="email" placeholder="Email" class="form-control">
	</div>

    <div class="form-group">
		<input type="text" name="celular" placeholder="Telefone celular" class="form-control">
	</div>

    <div class="form-group">
		<input type="date" name="dataNascimento" placeholder="Data de Nascimento" class="form-control">
	</div>

    <div class="form-group">
		<input type="text" name="pais" placeholder="País" class="form-control">
	</div>

    <div class="form-group">
		<input type="radio" name="genero" value="Masculino" checked> Masculino<br>
		<input type="radio" name="genero" value="Feminino"> Feminino<br>
    </div>

    <div class="form-group">
		<select>
			<option value="superadmin">Super Administrador</option>
			<option value="administrador">Administrador</option>
			<option value="assistente">Assistente</option>
			<option value="paciente">Paciente</option>
			<option value="paciente">Recepcionista</option>
		</select>
    </div>

	<input type="submit" value="Enviar" class="btn btn-primary">

</form>

@endsection