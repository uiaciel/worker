<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\National;
use App\Models\Shipname;
use App\Models\Port;
use App\Models\Orderjob;
use App\Models\Crew;
use App\Models\Ticket;
use App\Models\Ordercrew;
use Illuminate\Support\Facades\Redirect;
use Alert;
use App\Models\Orderdocument;
use Barryvdh\Snappy\Facades\SnappyPdf;

class OrderController extends Controller
{
    public function index()
    {
        $active = Order::where('status', 'Active')->get();
        $cancel = Order::where('status', 'Cancelled')->get();
        $fix = Order::where('status', 'Fixed')->get();
        $all = Order::All();

        toast('Info Toast', 'info');
        return view('order.index', [

            'active' => $active,
            'cancel' => $cancel,
            'fix' => $fix,
            'all' => $all,
        ]);
    }
    public function create()
    {
        //STEP 1 CREATE ORDER
        $nationaly = National::all();
        $port = Port::all();
        $shipname = Shipname::orderBy('name', 'asc')->get();
        return view('order.create', [
            'national' => $nationaly,
            'port' => $port,
            'shipname' => $shipname
        ]);
    }
    public function store(Request $request)
    {
        $dataport = Order::where('portstart', $request->portstart)->first();
        if ($dataport != $request->portstart) {
            $port = new Port;
            $port->name = $request->portstart;
            $port->save();
        }
        $datanat = Order::where('nationaly', $request->nationaly)->first();
        if ($datanat != $request->portstart) {
            $nat = new National;
            $nat->name = $request->nationaly;
            $nat->save();
        }
        $shipp = Shipname::where('name', $request->shipname)->first();
        if ($shipp != $request->shipname) {
            $nat = new Shipname;
            $nat->name = $request->shipname;
            $nat->save();
        }
        Order::create([
            'company_id' => $request->company_id,
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
            'client_id' => $request->client_id,
        ]);
        // STEP 2 KE ORDERAN NYA
        $url = '/order/' . $request->inv;
        toast('Post created successfully.', 'success');
        return redirect($url);
    }
    // STEP 2 ORDERANNYA
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
    // STEP 2 ORDERANNYA
    public function adminview($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ticket = Ticket::where('order_id', $order->id)->get();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();
        $orderdocument = Orderdocument::where('order_id', $order->id)->get();

        return view('order.admin.show', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
            'tickets' => $ticket,
            'orderdocuments' => $orderdocument,
        ]);
    }
    public function step2($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ticket = Ticket::where('order_id', $order->id)->get();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();
        return view('order.step3', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
            'tickets' => $ticket,
        ]);
    }
    public function printcrew($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ordercrew = Ordercrew::where('order_id', $order->id)->where('status', 'ACC')->get();
        return view('print.crew', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
        ]);
    }
    public function pdfcrew($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ordercrew = Ordercrew::where('order_id', $order->id)->where('status', 'ACC')->get();
        // share data to view
        view()->share('print.crew', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
        ]);
        $pdf = SnappyPdf::loadView('print.crew', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
        ]);
        // download PDF file with download method
        //   return $pdf->stream("filename.pdf", array("Attachment" => false));
        return $pdf->download('filename.pdf');
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
    public function update(Request $request, Order $order)
    {
        $order->update([
            // 'shipowner' => $request->shipowner,
            // 'shipname' => $request->shipname,
            // 'shipnumber' => $request->shipnumber,
            // 'shiptype' => $request->shiptype,
            // 'shipmaru' => $request->shipmaru,
            // 'fishingarea' => $request->fishingarea,
            // 'nationaly' => $request->nationaly,
            // 'member' => $request->member,
            // 'periode' => $request->periode,
            // 'portstart' => $request->portstart,
            // 'portend' => $request->portend,
            // 'start' => $request->start,
            // 'end' => $request->end,
            // 'remarks' => $request->remarks,
            // 'status' => $request->status,
            'step_2' => $request->step_2,
        ]);
        alert()->success('Berhasil', 'Data telah di update');
        return redirect()->route('order.index')
            ->with('success', 'Order updated successfully');
    }

    public function updatestep(Request $request, Order $order)
    {
        $order->update(['step_2' => $request->step_2]);

        // alert()->success('Berhasil', 'Data telah di update');
        // return redirect()->route('order.index')
        //     ->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        //
    }
    public function pcrew($id)
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ticket = Ticket::where('order_id', $order->id)->get();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();
        return view('print.crewz', [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
            'tickets' => $ticket,
        ]);
    }
}
