@extends ('templates.templateMenu')

@section('content')

<br/>
<form class="form" method="post" action="#">
{!! csrf_field() !!}
    <input type="text" nome="descricao" placeholder="Digite aqui" class="form-control">
    <br/>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
<div class="container">
    @yield('createSimple')
</div>

@endsection