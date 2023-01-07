<?php

namespace App\Http\Controllers;

use App\Models\Orderjob;
use App\Models\Order;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;

class OrderjobController extends Controller
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

        $joborder = new Orderjob;
        $joborder->order_id = $request->order_id;
        $joborder->job_id = $request->job;
        $joborder->age = $request->age;
        $joborder->exp = $request->exp;
        $joborder->number = $request->number;
        $joborder->remark = $request->remark;
        $joborder->crew_id = $request->crew_id;
        $joborder->save();

        Order::where('id', $request->order_id)->update([
            'step_1' => 1
        ]);

        $idorder = Order::where('id', $request->order_id)->first();

        return redirect()->route('order.show', $idorder->inv)->with('success', 'Data created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderjob  $orderjob
     * @return \Illuminate\Http\Response
     */
    public function show(Orderjob $orderjob)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderjob  $orderjob
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderjob $orderjob)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orderjob  $orderjob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderjob $orderjob)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderjob  $orderjob
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordercrew = Orderjob::findOrFail($id);
        $ordercrew->delete();
        return redirect()->back()->with('success', 'Data Delete successfully.');
    }
}
