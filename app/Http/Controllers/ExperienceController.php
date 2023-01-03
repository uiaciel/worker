<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Order;
use App\Models\Crew;
use App\Models\Ordercrew;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
    public function create($id)
    {
        $crew = Crew::where('subid', $id)->first();
        // $crew = Crew::All();
        
        return view('crew.addexp', [
            'crew' => $crew,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exp = new Experience;
        // $exp->order_id = $request->order_id;
        $exp->crew_id = $request->crew_id;
        $exp->vesselsname = $request->vesselsname;
        $exp->maru = $request->maru;
        $exp->number = $request->number;
        $exp->affiliation = $request->affiliation;
        
        $exp->signon = $request->signon;
        $exp->signoff = $request->signoff;
        
        $dateon = Carbon::parse($request->signon);
        $datenow = Carbon::parse($request->signoff);

        $exp->periode = $dateon->diffInMonths($datenow);
        
        // $exp->periode = $request->periode;
        
        $exp->salary = $request->salary;
        $exp->bonus = $request->bonus;
        
        $exp->currencysalary = $request->currencysalary;
        $exp->currencybonus = $request->currencybonus;
        
        $exp->job_id = $request->job;
        $exp->shipflag = $request->shipflag;
        $exp->freezer = $request->freezer;
        $exp->type = $request->type;
        $exp->fishingground = $request->fishingground;
        $exp->tonnage = $request->tonnage;
        $exp->fishingmaster = $request->fishingmaster;
        $exp->coldarea = $request->coldarea;
        $exp->disembark = $request->disembark;
        $exp->grade = $request->grade;
        $exp->save();
        
        return redirect()->back()
                        ->with('status','Experience add successfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
