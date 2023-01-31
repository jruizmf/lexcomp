
<div class="form-group">
    {!! Form::label('status', 'Tipo de Juicio', ['for' => 'judgment_type'] ) !!}
        <select name="judgment_type" id="judgment_type"  class="form-control" >
          @if (!isset($item))
         <option value="" selected>Seleccionar Juicio</option>
         @endif
        <?php $__currentLoopData = $judgment_types; $__env->addLoop($__currentLoopData); 
            foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($type->id); ?>" {{isset($item) && $item->judgment_type == $type->id  ? 'selected' : ''}}><?php echo e($type->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
        <input type="hidden" name="id" id="id" value="{{isset($item) && $item->id ? $item->id : ''}}">
        <input type="hidden" name="status" id="status" value="{{isset($item) && $item->status ? $item->status : '1'}}">
</div>
<div id="div-subtype" class="form-group">
    {!! Form::label('status', 'Tipo de formato', ['for' => 'judgment_type'] ) !!}
        <select name="judgment_subtype" id="judgment_subtype"  class="form-control" >
        <option value="">Favor de seleccionar</option>
        </select>
    </div>
<div class="form-group">
    {!! Form::label('intern_id', 'Control Interno', ['for' => 'intern_id'] ) !!}
    {!! Form::text('intern_id', null , ['class' => 'form-control', 'id' => 'intern_id', 'placeholder' => 'Escribe la clave de control interno...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('applicant1', 'Actor', ['for' => 'applicant1'] ) !!}
    {!! Form::text('applicant1', null , ['class' => 'form-control', 'id' => 'applicant1', 'placeholder' => 'Escribe el nombre del actor...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('expedient', 'Expediente', ['for' => 'applicant1'] ) !!}
    {!! Form::text('expedient', null , ['class' => 'form-control', 'id' => 'expedient', 'placeholder' => 'Escribe el numero de expediente...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('applicant2', 'Actor 2', ['for' => 'applicant2'] ) !!}
    {!! Form::text('applicant2', null , ['class' => 'form-control', 'id' => 'applicant2', 'placeholder' => 'Escribe el nombre del Corresponsal...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('defendant', 'Demandado', ['for' => 'defendant'] ) !!}
    {!! Form::text('defendant', null , ['class' => 'form-control', 'id' => 'defendant', 'placeholder' => 'Escribe el nombre del demandado...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('lawyer', 'Abogado', ['for' => 'lawyer'] ) !!}
    {!! Form::text('lawyer', null , ['class' => 'form-control', 'id' => 'lawyer', 'placeholder' => 'Escribe el nombre del abogado...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('license', 'Cedula Profesional', ['for' => 'license'] ) !!}
    {!! Form::text('license', null , ['class' => 'form-control', 'id' => 'license', 'placeholder' => 'Escribe el Numero de Cedula Profesional...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Domicilio', ['for' => 'address'] ) !!}
    {!! Form::text('address', null , ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Escribe el domicilio de la diligencia...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('state', 'Estado', ['for' => 'state'] ) !!}
    <select name="state" class="form-control" >
    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); 
        foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($state->id); ?>" {{isset($item) && $item->state == $state->id  ? 'selected' : ''}}><?php echo e($state->description); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
</div>

<div class="form-group">
    {!! Form::label('city', 'Ciudad', ['for' => 'nombre'] ) !!}
    {!! Form::text('city', null , ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'Escribe el nombre de la Ciudad...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('district', 'Distrito Judicial', ['for' => 'district'] ) !!}
    {!! Form::text('district', null , ['class' => 'form-control', 'id' => 'district', 'placeholder' => 'Escribe el Distrito Judicial...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('correspondent_id', 'Corresponsal', ['for' => 'correspondent_id'] ) !!}
    <select name="correspondent_id" class="form-control" >
    <?php $__currentLoopData = $correspondents; $__env->addLoop($__currentLoopData); 
        foreach($__currentLoopData as $correspondent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($correspondent->id); ?>" {{isset($item) && $item->correspondent_id == $correspondent->id  ? 'selected' : ''}}><?php echo e($correspondent->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
    
</div>
<div id="variables-content">

</div>
<script  type="application/javascript">
 $(document).ready(function(){    
     
         jQuery(document).ready(function(){
            $("#div-subtype").attr('hidden', true);
            jQuery('#judgment_subtype').change(function(e){
               e.preventDefault();
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':"{{ csrf_token() }}"
                    }
                });
                console.log(e.target.value)
               $.ajax({
                  url: "/jugment-subtype/"+e.target.value,
                  method: 'get',
                  data:{
                  },
                  success: function(result){

                    //alert(response); // show [object, Object]

                    var $div = $('#variables-content');
                    if(typeof result.data.data != 'undefined'){
                        $.each(JSON.parse(result.data.data),function(key, value)
                        {
                            console.log(value)
                            $div.append('<div class="form-group"><label for="">' + value.title + ' - ' + value.description + '</label><input id="title"  name="title" class="form-control" value=""/></div>'); // return empty
                        });
                        
                    }
                  },error: function(result){
                     console.log(result);
                  }});
               });
               jQuery('#judgment_type').change(function(e){
                   
                    e.preventDefault();
                    loadSubtypes(e.target.value);
               });
            });
             @if (isset($item))
                 var item = $("#judgment_type").val()
                 var subtype = $("#judgment_subtype").val()
                loadSubtypes(item);
                loadvariables(subtype);
            @endif
 });
  function loadvariables(value){
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':"{{ csrf_token() }}"
                    }
                });
                var subtypeId = 0;
                @if (isset($item->judgment_subtype))
                    subtypeId ={{$item->judgment_subtype}}
                @endif
               $.ajax({
                  url: "/jugment-subtype/"+value,
                  method: 'get',
                  data:{
                  },
                  success: function(result){
                    $("#div-subtype").attr('hidden', false);
                    $("#judgment_subtype").attr('disabled', false);

                    //alert(response); // show [object, Object]

                    var $select = $('#judgment_subtype');
    
                    $select.find('option').remove();
                    
                    @if (isset($item->judgment_subtype))
                        $select.append(`<option value='' selected>Selecciona formato</option>`);
                    @endif
                    console.log("asdfghjkl")
                    console.log(result.data)
                    $.each(result.data,function(key, value)
                    {
                        $select.append(`<option value='${value.id}' ${value.id == subtypeId ? 'selected':''}>${value.name}</option>`); // return empty
                    });
                  },error: function(result){
                     console.log(result);
                  }});
 }
 
 function loadSubtypes(value){
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':"{{ csrf_token() }}"
                    }
                });
                var subtypeId = 0;
                @if (isset($item->judgment_subtype))
                    subtypeId ={{$item->judgment_subtype}}
                @endif
               $.ajax({
                  url: "/jugment-subtype/bytype/"+value,
                  method: 'get',
                  data:{
                  },
                  success: function(result){
                    $("#div-subtype").attr('hidden', false);
                    $("#judgment_subtype").attr('disabled', false);

                    //alert(response); // show [object, Object]

                    var $select = $('#judgment_subtype');
    
                    $select.find('option').remove();
                    $.each(result.data,function(key, value)
                    {  
                            $select.append(`<option value='${value.id}' ${value.id == subtypeId ? 'selected': ''}>${value.description}</option>`); // return empty
                        
                    });
                    if(subtypeId ==0){
                     loadvariables(result.data[0].id);
                    }
                  },error: function(result){
                     console.log(result);
                  }});
 }
</script>