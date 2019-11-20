@extends('layout.layout')

@section('title')
    Hola
@endsection

@section('container')
    <!-- comentario HTML -->
    {{-- Comentario Blade --}}
    <div class="col-12">
        <a href="{{ route('category.create') }}" class="btn btn-primary">
            Agregar
        </a>
    </div>
    <div class="clearfix">&nbsp;</div>
    @include('category.table')
@endsection