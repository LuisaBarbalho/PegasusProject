@extends ('templates.templateMenu')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))        
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif        

    <div class="content">
        <div class="title m-b-md">
            Pegasus
        </div>

        <div class="links">
            <a href="{{route('form.index')}}">Formulários</a>
            <a href="{{route('user.index')}}">Usuários</a>
            <a href="#">Auditoria</a>
            <a href="#">Estatísticas</a>
            <a href="#">Perfil</a>
        </div>
    </div>
</div>

@endsection
    
