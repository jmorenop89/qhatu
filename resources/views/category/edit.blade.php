@extends('layout.layout')

@section('title')
    Editar Categoria
@endsection

@section('container')
    <form action="{{ route('category.update',$model->id) }}" method="post">
        @include('category.fields')
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
    </form>
@endsection