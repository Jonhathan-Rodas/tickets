@extends('layouts.admin')

@section('main')
    <header class="content__title">
        <h1>Crear Tikets</h1>

        <div class="actions">
            <a href="{{ route('ticket.list') }}" class="actions__item zmdi zmdi-plus"></a>
        </div>
    </header>

    <div class="row">
        @foreach($services as $service)
        <div class="col-4">
            <a href="{{ route('ticket.create', ['service_id' => $service->id]) }}" alt="{{ $service->name }}">
                <div class="card">
                    <div class="card-body text-center" >
                        <h2 class="card-title">{{ $service->name }}</h2>
                        <b>Q. {{ $service->sale_price }}</b>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection