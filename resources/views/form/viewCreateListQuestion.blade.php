@extends ('templates.navbar')

@section('content')

<form class="form" method="post" action="#">
{!! csrf_field() !!}
    <input type="text" nome="descricao" placeholder="Digite a pergunta aqui" class="form-control">
    <br/>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>

@endsection