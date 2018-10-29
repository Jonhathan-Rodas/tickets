@extends('layouts.admin')

@section('main')

    <header class="content__title">
        <h1>Servicios</h1>

        <div class="actions">
            <a href="{{ route('services.create') }}" class="actions__item zmdi zmdi-plus"></a>
        </div>
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
                           Name
                       </th>
                        <th>
                            Precio
                        </th>
                        <th rowspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->sale_price  }}</td>
                        <td>
                            <a href="{{ action('ServiceController@edit', $service->id ) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{action('ServiceController@destroy', $service->id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection