@extends('layouts.admin')

@section('main')
    <header class="content__title">
        <h1>Editar Servicio</h1>
    </header>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ action('ServiceController@update', $id) }}" class="row">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="col-12">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="name" type="text" class="form-control" value="{{ $service->name }}" >
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input name="sale_price" type="text" class="form-control" value="{{ $service->sale_price }}">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea name="description" class="form-control">{{ $service->description }}</textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection