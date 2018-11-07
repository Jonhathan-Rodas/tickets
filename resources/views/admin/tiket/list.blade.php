@extends('admin.layouts.admin')

@section('header-title', 'Tickets')

@section('main')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>
                Servicio
            </th>
            <th>
                Codigo
            </th>
            <th>
                Precio
            </th>
            <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->service->name }}</td>
                <td>{{ $ticket->code }}</td>
                <td>Q. {{ $ticket->service->sale_price }}</td>
                <td>{{ $ticket->created_at }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $tickets->links() }}
    </div>
@endsection