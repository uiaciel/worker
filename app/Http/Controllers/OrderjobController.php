<?php

namespace App\Http\Controllers;

use App\Models\Orderjob;
use App\Models\Order;
use App\Models\Ordercrew;
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
        $jobid = array_filter($request->job);
        $age = array_filter($request->age);
        $exp = array_filter($request->exp);
        $number = array_filter($request->number);
        $remark = array_filter($request->remark);

        $orderid = $request->order_id;


        foreach ($jobid as $key => $n) {
            $joborder = new Orderjob;
            $joborder->order_id = $orderid;
            $joborder->job_id = $n;
            $joborder->age = $age[$key];
            $joborder->exp = $exp[$key];
            $joborder->number = $number[$key];
            $joborder->remark = $remark[$key];
            $joborder->save();
        }

        // $joborder = new Orderjob;
        // $joborder->order_id = $request->order_id;
        // $joborder->job_id = $request->job;
        // $joborder->age = $request->age;
        // $joborder->exp = $request->exp;
        // $joborder->number = $request->number;
        // $joborder->remark = $request->remark;
        // $joborder->crew_id = $request->crew_id;
        // $joborder->save();

        Order::where('id', $orderid)->update([
            'step_1' => 1
        ]);

        $idorder = Order::where('id', $orderid)->first();

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

        $orderjob = Orderjob::findOrFail($id);
        Ordercrew::where('orderjob_id', $id)->delete();

        $orderjob->delete();


        return redirect()->back()->with('success', 'Data Delete successfully.');
    }
}
