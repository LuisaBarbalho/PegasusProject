@extends ('templates.navbar')

@section('content')

<form class="form" method="post" action="#">
{!! csrf_field() !!}

{!! Form::open(['href' => 'create-2', 'class'=>'form']) !!}

  <div class="form-group">
		<input type="text" name="titulo" placeholder="Título" class="form-control">
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título']) !!} 
	</div>

  <div class="form-group">
		<input type="date" name="dataNascimento" placeholder="Data de Nascimento" class="form-control">
		{!! Form::date('phone', null, ['class' => 'form-control', 'placeholder' => 'Data de Nascimento']) !!}
	</div>

  <div class="form-group">
		<input type="textarea" name="descricao" placeholder="Descrição" class="form-control">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
	</div>

	<div class="form-group">
    <h4 align="left">Pesos das Respostas</h4>
    <h6>Sim: 
			<input type="number" name="pesoSim" class="form-control">
			{!! Form::number('pesoSim', 'value') !!}
		</h6>
    <h6>Não: 
			<input type="number" name="pesoNao" class="form-control">
			{!! Form::number('pesoNao', 'value') !!}
		</h6>
    <h6>Talvez: 
			<input type="number" name="pesoTalvez" class="form-control">
			{!! Form::number('pesoTalvez', 'value') !!}
		</h6>
  </div>

	<input type="submit" value="Enviar" class="btn btn-primary">
	{!! Form::submit('Continuar', ['class'=>'btn btn-primary']) !!}

</form>	
{!! Form::close() !!}

@endsection
