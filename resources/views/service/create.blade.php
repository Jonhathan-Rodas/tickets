@extends('layouts.admin')

@section('main')
    <header class="content__title">
        <h1>Nuevo Servicio</h1>
    </header>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ url('services')  }}" class="row">
                @csrf
                <div class="col-12">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input name="sale_price" type="text" class="form-control" value="{{ old('sale_price') }}">
                        <i class="form-group__bar"></i>
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection