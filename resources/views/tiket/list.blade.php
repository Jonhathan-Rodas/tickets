@extends('layouts.admin')

@section('main')

    <header class="content__title">
        <h1>Tikets Creados</h1>
    </header>

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif

    <div class="card">
        <div class="card-body">
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
                      $ticket->save();
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
        </div>
    </div>
@endsection