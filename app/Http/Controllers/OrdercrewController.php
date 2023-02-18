<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ordercrew;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrdercrewController extends Controller
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
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crew_id = array_filter($request->crew_id);
        $orderjob_id = $request->orderjob_id;
        $orderid = $request->order_id;
        $remark = $request->remark;

        foreach ($crew_id as $n) {
            $ordercrew = new Ordercrew;
            $ordercrew->order_id = $orderid;
            $ordercrew->crew_id = $n;
            $ordercrew->orderjob_id = $orderjob_id;
            $ordercrew->status = 'RECOMMENDATION';
            $ordercrew->remark = $remark;
            $ordercrew->save();
        }

        $idorder = Order::where('id', $request->order_id)->first();
        // $order = Order::find($request->order_id);
        // $order->update(['step_2' => 1]);

        //if admin redirect to admin
        if (Gate::check('admin')) {
            return redirect()->route('order.adminview', $idorder->inv)->with('success', 'Data created successfully.');
        } else {
            return redirect()->route('order.show', $idorder->inv)->with('success', 'Data created successfully.');
        }
    }

    public function updatecrew(Request $request)
    {
        // $idorder = Order::where('id', $request->order_id)->first();
        $order = Order::find($request->order_id);
        $order->update(['step_2' => 1]);

        return redirect()->back();
    }

    public function edit(Ordercrew $ordercrew)
    {
        //
    }

    public function update(Request $request)
    {
    }
    public function updateall(Request $request, Ordercrew $ordercrew)
    {
        foreach ($request->id as $i => $id) {
            $ordercrew = Ordercrew::find($id);
            $ordercrew->status = $request->status[$i];
            $ordercrew->save();

            // Ordercrew::where('id', $id)
            // ->update(['status' => $request->status[$i]]);
        }

        Order::where('id', $request->orderid)->update([
            'airticketby' => $request->airticketby,
            'step_3' => 1
        ]);

        alert()->success('Berhasil', 'Data telah di update');
        return redirect()->back()->with('success', 'Data Delete successfully.');
    }

    public function destroy($id)
    {
        $ordercrew = Ordercrew::findOrFail($id);
        $ordercrew->delete();
        return redirect()->back()->with('success', 'Data Delete successfully.');
    }
    public function destroyall(Request $request)
    {
        $id = $request->id;
        foreach ($id as $user) {
            Ordercrew::where('id', $user)->delete();
        }
        return redirect()->back()->with('success', 'Data Delete successfully.');
    }
}
