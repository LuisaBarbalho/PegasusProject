@extends ('templates.templateMenu')

@section('content')

<a href="{{route('form.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a><br/>
<br/>

<div class="text-center">
    <form class="form-inline text-center" method="post" action="#">
    {!! csrf_field() !!}

       
        <input class="form-control" type="text" name="formulario" placeholder="Pesquisar formulário">
        
    
        <input type="submit" value="Pesquisar" class="btn btn-primary">

    </form>
</div>


<div class="container">
    <div class="row text-center">
@foreach ($forms as $form)
    <div class="col-md-4 col-sm-6">
        <!-- <span class="oi oi-document icon-file text-center" title="document" aria-hidden="true"></span> 
        <span class="glyphicon glyphicon-file icon-file text-center" aria-hidden="true"></span> -->
        <i class="fas fa-file-alt"></i>
        </br> 
        {{ $form }}
    </div>
@endforeach    
    </div>
</div>

@endsection