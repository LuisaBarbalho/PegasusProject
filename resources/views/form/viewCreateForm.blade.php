@extends ('templates.templateMenu')

@section('content')

<form class="form" method="post" action="#">
{!! csrf_field() !!}

  <div class="form-group">
		<input type="text" name="titulo" placeholder="Título" class="form-control">
	</div>

  <div class="form-group">
		<input type="date" name="dataCriacao" placeholder="Data de Criação" class="form-control">
	</div>

  <div class="form-group">
		<input type="textarea" name="descricao" placeholder="Descrição" class="form-control">
	</div>

	<div class="form-group">
    <h4 align="left">Pesos das Respostas</h4>
    <h6>Sim: 
			<input type="number" name="pesoSim" class="form-control">
		</h6>
    <h6>Não: 
			<input type="number" name="pesoNao" class="form-control">
		</h6>
    <h6>Talvez: 
			<input type="number" name="pesoTalvez" class="form-control">
		</h6>
  </div>

	<input type="submit" value="Enviar" class="btn btn-primary">

</form>	


@endsection
