@extends ('templates.templateMenu')

@section('content')

<br/>
<form class="form-inline" method="post" action="#">
{!! csrf_field() !!}
    <input type="text" name="formulario" placeholder="Formulário" class="form-control">
    <input type="text" name="usuario" placeholder="{{ $descricao }}" class="form-control">
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
<div class="container">
    @yield('linkForm')
</div>

@endsection