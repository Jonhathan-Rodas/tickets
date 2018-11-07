<?php

namespace App\Http\Controllers;

use App\Service;
use App\Ticket;
use function foo\func;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.tiket.index')->with(compact('services'));
    }

    public function create($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.tiket.create')->with(compact('service'));
    }

    public function store(Request $request)
    {
        $rules = [
            'code' => 'required|max:120',
            'service_id' => 'required'
        ];
        $request->validate($rules);

        $ticket = new Ticket([
            'code' =>  $request->get('code'),
            'service_id' =>  $request->get('service_id')
        ]);

        $id = $ticket->id;
        $pdf = \PDF::loadView('admin.tiket.pdf', compact('ticket', 'id'));
        $ticket->save();

        return  $pdf->download('invoice.pdf');

        #$this->print($ticket);

       return redirect('tickets')->with('success','Se genero el Ticket');
    }

    public function list()
    {
        $tickets = Ticket::paginate(10);
        return view('admin.tiket.list')->with(compact('tickets'));
    }

    public function report()
    {
        $tickets = Ticket::all();
        $total = 0;

        $tickets->each(function($ticket) use (&$total){
            $total += $ticket->service->sale_price;
        });


        $pdf = \PDF::loadView('admin.tiket.report', compact('tickets', 'total'));

        return  $pdf->download('invoice.pdf');
    }
}
