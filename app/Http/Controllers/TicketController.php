<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Alert;
use App\Models\Order;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiket = new Ticket;
        $tiket->order_id = $request->orderid;
        $tiket->detail = $request->detail;
        $tiket->save();

        Order::where('id', $request->orderid)->update([
            'step_4' => 1
        ]);

        $url = '/admin/order/' . $request->orderinv;

        toast('Penawaran Tiket berhasil dibuat.', 'success');
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $ticket->update($request->status);

        $tiket = Ticket::findorfail($id);
        $tiket->status = $request->status;
        $tiket->save();

        // return redirect()->route('admin.author.index')->with('success', 'Data berhasil diubah');
        // Ticket::where('id', $request->ticketid)->update(['status' => $request->status]);

        if ($request->status == "deal") {
            Order::where('id', $request->orderid)->update([
                'step_5' => 1
            ]);
        }

        if ($request->status == "client") {
            Order::where('id', $request->orderid)->update([
                'step_5' => 1
            ]);
        }


        $url = '/order/' . $request->orderinv;

        toast('Post created successfully.', 'success');
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
