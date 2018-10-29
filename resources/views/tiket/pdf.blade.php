<h1 style="text-align: center">Parque Habitacional, Industrial <br> y Comercial Ranho Grande</h1>
<span style="color: red; text-align: center;">
    <b>{{ $id }}</b>
</span>
<table>
    <thead>
        <tr>
            <th>Servicio</th>
            <th>Precio</th>
        </tr>
    </thead>
   <tbody>
        <tr>
            <td><b>{{ $ticket->service->name }}</b><br>{{ $ticket->service->description }}</td>
            <td>Q. {{ $ticket->service->sale_price }}</td>
        </tr>
   </tbody>

    <div style="text-align: center">
        <b>{{ $ticket->created_at }}</b>
    </div>
    <br><br><br>
    <b>Firma:_____________________</b>
    <br><br><br><br>
    <b>Sello:_____________________</b>



</table>