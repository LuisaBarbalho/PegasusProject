@extends ('templates.navbar')

@section('content')

<div class="container">  
      <br />  
      <br />    
      <div class="form-group">  
            {!! Form::open(['class'=>'form', 'name'=>'live_form', 'id'=>'live_form']) !!}

                  <div class="form-group table-responsive"> 
                  <h4 align="left">Categorias</h4>
                        <table class="table" id="dynamic_field">  
                              <tr>  
                                    <td>{!! Form::text('categorias', null, ['name'=>'name[]', 'class' => 'form-control name_list', 'placeholder' => 'Categoria 1']) !!}</td>  
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                              </tr>  
                        </table>
                  </div> 
                      
                  {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
      </div>  
</div>

<!-- Adiciona novos campos de input para as categorias -->
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Categoria '+i+'" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#live_form').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#live_form')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

 
@endsection

