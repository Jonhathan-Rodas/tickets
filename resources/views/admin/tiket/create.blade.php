@extends('admin.layouts.admin')

@section('header-title', 'Listado de Tickets')

@section('main')
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
@endsection