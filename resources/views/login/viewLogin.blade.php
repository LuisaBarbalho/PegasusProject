@extends ('templates.templateMenu')

@section('content')

<form class="form" method="post" action="#">
{!! csrf_field() !!}
    <input type="text" nome="username" placeholder="Nome do Usuário" class="form-control">
    <input type="password" nome="password" placeholder="Senha" class="form-control">
    <br/>
    <input type="submit" value="Logar" class="btn btn-primary">
</form>

@endsection