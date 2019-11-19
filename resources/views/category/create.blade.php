@extends('layout.layout')

@section('title')
    Registrar Categoria
@endsection

@section('container')
    <form action="" method="post">
        @include('category.fields')
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">
                    Registar
                </button>
            </div>
        </div>
    </form>
@endsection