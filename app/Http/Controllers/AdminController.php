<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Order;
use App\Models\Ordercrew;
use App\Models\Orderdocument;
use App\Models\Orderjob;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ticket = Ticket::where('order_id', $order->id)->get();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();
        $orderdocument = Orderdocument::where('order_id', $order->id)->get();

        return view('order.step2', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
            'tickets' => $ticket,
            'orderdocuments' => $orderdocument,
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
