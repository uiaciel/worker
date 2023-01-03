<?php

namespace App\Http\Controllers;
use App\Models\National;
use App\Models\Shipname;
use App\Models\Port;
use App\Models\Order;

use Illuminate\Http\Request;

class ReController extends Controller
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
    public function stepOne()
    {
        $nationaly = National::all();
        $port = Port::all();
        $shipname = Shipname::orderBy('name', 'asc')->get();
        
        return view('request.create', [
            'national' => $nationaly,
            'port' => $port,
            'shipname' => $shipname
        ]);
    }

    public function storeStepOne(Request $request)
    {
        $dataport = Order::where('portstart', $request->portstart)->first();
        if($dataport != $request->portstart)
        {
            
            $port = new Port;
            $port->name = $request->portstart;
            $port->save();
        }
        
        $datanat = Order::where('nationaly', $request->nationaly)->first();
        if($datanat != $request->portstart)
        {
            $nat = new National;
            $nat->name = $request->nationaly;
            $nat->save();
              
        }
        
        $shipp = Shipname::where('name', $request->shipname)->first();
        if($shipp != $request->shipname)
        {
            $nat = new Shipname;
            $nat->name = $request->shipname;
            $nat->save();
              
        }
        
        Order::create([
            'inv' => $request->inv,
            'shipowner' => $request->shipowner,
            'shipname' => $request->shipname,
            'shipnumber' => $request->shipnumber,
            'shiptype' => $request->shiptype,
            'shipmaru' => $request->shipmaru,
            'fishingarea' => $request->fishingarea,
            'nationaly' => $request->nationaly,
            'member' => $request->member,
            'periode' => $request->periode,
            'portstart' => $request->portstart,
            'portend' => $request->portend,
            'start' => $request->start,
            'end' => $request->end,
            'remarks' => $request->remarks,
            'status' => $request->status,
        ]);
    }

   public function stepTwo($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ticket = Ticket::where('order_id', $order->id)->get();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();
        
        return view('re.steptwo', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
            'tickets' => $ticket,
        ]);
    }

   
   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
