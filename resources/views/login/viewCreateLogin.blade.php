@extends ('templates.templateMenu')

@section('content')

    <form class="form" method="post" action="#">
        {!! csrf_field() !!}

        <input type="text" nome="nome" placeholder="Nome" class="form-control">
        <input type="text" nome="cpf" placeholder="CPF" class="form-control">
        <input type="text" nome="email" placeholder="E-mail" class="form-control">
        <input type="date" nome="datadenascimento" placeholder="Data de Nascimento" class="form-control">
        
        <br/>
        <h6>Gênero: </h6>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <br/>

        <h6>Profissão: </h6>
        <select class="form-control">
            <option value="selecionar">Selecione uma das Opções</option>
            <option value="saab">Engenheiro</option>
            <option value="opel">Estudante</option>
            <option value="audi">Médico</option>
        </select>
        <br/>
        
        <h6>País: </h6>
        <select name="pais" class="form-control">
            <option value="selecionar">Selecione uma das Opções</option>
            <option value="brasil">Brasil</option>
            <option value="inglaterra">Inglaterra</option>
            <option value="mexico">México</option>
        </select>
        <br/>

        <div class="conditional" data-cond-option="pais" data-cond-value="brasil">
            <h6 >Estado: </h6>
            <select name="estado" class="form-control">
                <option value="selecionar">Selecione uma das Opções</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="to">Tocantins</option>
            </select>
            <br/>
        </div>

        <div class="conditional" data-cond-option="estado" data-cond-value="rn">
            <h6 >Cidade: </h6>
            <select name="cidade" class="form-control">
                <option value="selecionar">Selecione uma das Opções</option>
                <option value="caico">Caicó</option>
                <option value="natal">Natal</option>
                <option value="martins">Martins</option>
            </select>
            <br/>
        </div>

        <div class="conditional" data-cond-option="cidade" data-cond-value="natal">
            <h6 >Bairro: </h6>
            <select name="bairro" class="form-control">
                <option value="selecionar">Selecione uma das Opções</option>
                <option value="alecrim">Alecrim</option>
                <option value="barro_vermelho">Barro Vermelho</option>
                <option value="tirol">Tirol</option>
            </select>
            <br/>
        </div>

        <h6>Instituição: </h6>
        <select name="instituicao" class="form-control">
            <option value="selecionar">Selecione uma das Opções</option>
            <option value="huol">Hospital Universitairo Onofre Lopes - HUOL</option>
        </select>
        <br/>

        <input type="text" nome="username" placeholder="Nome do Usuário" class="form-control">
        <input type="password" nome="password" placeholder="Senha" class="form-control">
        <input type="password" nome="confirmedPassword" placeholder="Confirmar Senha" class="form-control">
        <br/>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>

<script>
(function($) {
  $.fn.conditionize = function(options){ 
    
     var settings = $.extend({
        hideJS: true
    }, options );
    
    $.fn.showOrHide = function(listenTo, listenFor, $section) {
      if ($(listenTo).is('select, input[type=text]') && $(listenTo).val() == listenFor ) {
        $section.slideDown();
      }
      else if ($(listenTo + ":checked").val() == listenFor) {
        $section.slideDown();
      }
      else {
        $section.slideUp();
      }
    } 

    return this.each( function() {
      var listenTo = "[name=" + $(this).data('cond-option') + "]";
      var listenFor = $(this).data('cond-value');
      var $section = $(this);
  
      //Set up event listener
      $(listenTo).on('change', function() {
        $.fn.showOrHide(listenTo, listenFor, $section);
      });
      //If setting was chosen, hide everything first...
      if (settings.hideJS) {
        $(this).hide();
      }
      //Show based on current value on page load
      $.fn.showOrHide(listenTo, listenFor, $section);
    });
  }
}(jQuery));
  
 $('.conditional').conditionize();
 </script>

@endsection