@extends('layouts.app')
{!! method_field('PATCH') !!}
@section('content')
    <h4 class="text-center">Editar Plantilla: {{ $item->name  }}</h4>
    {!! Form::model($item, [ 'route' => ['template/update', $item->id], 'method' => 'PUT']) !!}
    @csrf
        @include('template.partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection