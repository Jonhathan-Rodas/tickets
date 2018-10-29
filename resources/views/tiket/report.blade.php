<h1 style="text-align: center">
    Reporte de Tickets Emitidos
</h1>

<p>
    <b>Tickets Emitidos: </b>{{ $tickets->count() }}
</p>

<table style="width: 100%; border: 1px solid black">
    <thead>
    <tr style="background: #dadada">
        <th style='border: 1px solid black;'>
            #
        </th>
        <th style='border: 1px solid black;'>
            Servicio
        </th>
        <th style='border: 1px solid black;'>
            Codigo
        </th>
        <th style='border: 1px solid black;'>
            Precio
        </th>
        <th style='border: 1px solid black;'>Fecha</th>
    </tr>
    </thead>
    <tbody style='border: 1px solid black;' >
    @foreach($tickets as $ticket)
        <tr>
            <td style='border: 1px solid black;'> {{ $loop->iteration }}</td>
            <td style='border: 1px solid black;'> {{ $ticket->service->name }}</td>
            <td style='border: 1px solid black;'> {{ $ticket->code }}</td>
            <td style='border: 1px solid black;'>Q. {{ $ticket->service->sale_price }}</td>
            <td style='border: 1px solid black;'>{{ $ticket->created_at }}</td>
        </tr>
    @endforeach
    <tr style="background: #dadada">
        <td colspan="4" style='border: 1px solid black;'>
            Total:
        </td>
        <td style='border: 1px solid black;'>Q. {{ $total }}</td>
    </tr>
    </tbody>
</table>