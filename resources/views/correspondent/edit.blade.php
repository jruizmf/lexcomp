@extends('layouts.app')
{!! method_field('PATCH') !!}
@section('content')
<div class="wrapper">

    <div class="row ">
        @include('partials.sidebar')
        <div class="container">
            <div class="row justify-content-center py-5 px-5">
                <div class="col-md-10">
                    <h2 class="section-title">Editar Corresponsal: {{ $item->name  }}</h2>
                    {!! Form::model($item, [ 'route' => ['correspondent/update', $item], 'method' => 'PUT']) !!}
                    @csrf
                        @include('correspondent.partials.fields')
                        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection