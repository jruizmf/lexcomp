<div class="form-group">
    {!! Form::label('name', 'Nombre', ['for' => 'nombre'] ) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Escribe el nombre del Corresponsal...' ]  ) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripcion', ['for' => 'description'] ) !!}
    {!! Form::text('description', null , ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Datos extras sobre la plantilla...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Plantilla', ['for' => 'url'] ) !!}
    <input type="file" class="form-control"  name='file' required placeholder="Carga tu documento ">
</div>


<div class="form-group">
    {!! Form::label('type', 'Tipo de documento', ['for' => 'type'] ) !!}
    <select name="type" class="form-control">
        <option value="" disabled selected>Elige un tipo de documento...</option>
        <option value="1">Uno</option>
        <option value="2">Dos</option>
        <option value="3">Tres</option>
    </select>
</div>