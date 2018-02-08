@extends ('templates.navbar')

@section('content')

<div class="container">  
      <br />  
      <br />    
      <div class="form-group">  
            {!! Form::open(['class'=>'form', 'name'=>'live_form', 'id'=>'live_form']) !!}

                  <div class="form-group">
                        <h4 align="left">Respostas</h4>
                        {!! Form::select('resposta', ['sn'=>'Sim/Não', 'stn'=>'Sim/Talvez/Não'], null, ['name'=>'resposta', 'placeholder' => 'Tipo de Resposta']) !!}
                  </div>

                  <div class="conditional" data-cond-option="resposta" data-cond-value="sn">
                        <h4 align="left">Pesos</h4>
                        <h6>Sim: {!! Form::number('pesoSim', 'value') !!}</h6>
                        <h6>Não: {!! Form::number('pesoNao', 'value') !!}</h6>
                  </div>

                  <div class="conditional" data-cond-option="resposta" data-cond-value="stn">
                        <h4 align="left">Pesos</h4>
                        <h6>Sim: {!! Form::number('pesoSim', 'value') !!}</h6>
                        <h6>Não: {!! Form::number('pesoNao', 'value') !!}</h6>
                        <h6>Talvez: {!! Form::number('pesoTalvez', 'value') !!}</h6>
                  </div>
                      
                  {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
      </div>  
</div>


<!-- Torna o campo de PESOS condicional a depender do tipo de resposta -->
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

