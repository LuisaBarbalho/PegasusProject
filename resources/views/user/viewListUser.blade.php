@extends ('templates.templateMenu')

@section('content')


<div class="text-center">
    <form class="form" method="post" action="#">
    {!! csrf_field() !!}
        <input type="text" name="usuario" placeholder="Pesquisar usuário" class="form-control">
        <input type="submit" value="Pesquisar" class="btn btn-primary">
    </form>
</div>

<table class="table table-striped">

<a href="{{route('user.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a><br/> 

    
	<tr>
        <th>ID</th>
		<th>Nome</th>
		<th>CPF</th>
        <th>Data de Nascimento</th>
		<th>Perfil</th>
    </tr>

    

</table>


@endsection