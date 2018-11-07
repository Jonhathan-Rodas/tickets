@extends('admin.layouts.admin')

@section('header-title', 'Tickets')

@section('main')
    <div class="row">
        @foreach($services as $service)
            <div class="col-4">
                <div class="widget widget-12 has-shadow">
                    <div class="widget-body text-center" >
                        <a href="{{ route('ticket.create', ['service_id' => $service->id]) }}" alt="{{ $service->name }}">
                            <h2 class="card-title">{{ $service->name }}</h2>
                            <b>Q. {{ $service->sale_price }}</b>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection