@extends('layouts.admin')

@section('main')
    <header class="content__title">
        <h1>Nuevo Ticket de: {{ $service->name }}</h1>
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
            <form method="post" action="{{ route('ticket.store') }}" class="row">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                <div class="col-12">
                    <div class="form-group">
                        <label>Codigo</label>
                        <input name="code" type="text" class="form-control" value="{{ old('codigo') }}">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection