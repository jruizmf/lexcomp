@extends('layouts.app')

@section('content') 
<div class="wrapper">

    <div class="row ">
        @include('partials.sidebar')
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-12">
                    <div class="container">
                        <div class="d-flex flex-row-reverse">
                        <a class="btn plus-button" href="{{ url('/juicios-subtipo/agregar/'.$judmentTypeId.'') }}" data-toggle="tooltip" data-placement="top" title="Agregar Juicio" role="button"><img src="../img/icons/plus-icon.svg" width="20" heigth="20" alt="Plus"></a>
                        </div>
                    @include('judgment-subtype.partials.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection