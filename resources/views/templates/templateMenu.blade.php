<!DOCTYPE html>
<html>
	<head>
    <title>{{$title or 'Pegasus'}}</title>
		<!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- CSS -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<body>
        <header>
            <!-- Barra de navegação -->
            <nav class="navbar navbar-toggleable-md navbar-light navbar-fixed-top bg-faded">
                
                <!-- Permite respansividade da barra de navegação -->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Marca -->
                <a href="{{ URL::to('/') }}" class="navbar-brand">Pegasus</a>
                    
                <!-- Itens do menu -->
                <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                    <ul class="navbar-nav">

                        <!-- Menu Admin -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">

                            <!-- Opcões do menu Admin -->
                                <li class="dropdown-header">Cadastros Básicos</li>
                                <li><a class="dropdown-item" href="{{ route('form.create') }}">Formulários</a></li>
                                <li><a class="dropdown-item" href="#">Respostas e Pesos</a></li>
                                <li><a class="dropdown-item" href="{{ url('formulario/cadastrar/categoria') }}">Categorias</a></li>
                                <li><a class="dropdown-item" href="#">Perguntas</a></li>
                                <li><a class="dropdown-item" href="#">Usuários</a></li>

                                <li class="dropdown-header">Cadastros Essenciais</li>
                                <li><a class="dropdown-item" href="#">Perfis</a></li>
                                <li><a class="dropdown-item" href="{{ url('cadastros-essenciais/etnia') }}">Etnias</a></li>
                                <li><a class="dropdown-item" href="{{ url('cadastros-essenciais/genero') }}">Gêneros</a></li>
                                <li><a class="dropdown-item" href="{{ url('cadastros-essenciais/profissao') }}">Profissões</a></li>

                                <li class="dropdown-header">Relacionar Formulários</li>
                                <li><a class="dropdown-item" href="{{ url('formulario/relacionar/pergunta') }}">Perguntas</a></li>
                                <li><a class="dropdown-item" href="{{ url('formulario/relacionar/resposta-peso') }}">Respostas e Pesos</a></li>
                                <li><a class="dropdown-item" href="{{ url('formulario/relacionar/usuario') }}">Usuários</a></li>
                            </ul>
                        </li>
                        <!-- Consultar Formulário(s) -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('form.index')}}">Formulários</a>
                        </li>

                        <!-- Consultar Usuário(s) -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.index')}}">Usuários</a>
                        </li>

                        <!-- Consultar Auditoria -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Auditoria</a>
                        </li>

                        <!-- Consultar Estatíticas -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estatíticas</a>
                        </li>

                        <!-- Consultar próprio perfil -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                    </ul>
                </div>       
            </nav>

            <!-- Banner inicial contendo o titulo da categoria -->
            <h1 class="container title-pg" style="margin-top:70px">
                {{ $title or null }}
            </h1>
                
        </header>
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>