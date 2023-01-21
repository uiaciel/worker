<?php

namespace App\Http\Controllers;

use App\Exports\CrewExport;
use Illuminate\Http\Request;
use App\Models\Crew;
use App\Models\Experience;
use Maatwebsite\Excel\Facades\Excel;
use Alert;
use App\Models\Certificate;
use App\Models\Contract;
use App\Models\Document;
use App\Models\Medical;

class CrewController extends Controller
{
    
    public function index()
    {
        $crew = Crew::All();

        return view('crew.index', [
            'crew' => $crew
        ]);
    }

    public function filter($job)
    {
        $crew = Crew::where('job_id', $job)->get();

        return view('crew.byjob', [
            'crew' => $crew
        ]);
    }
    
    public function create()
    {
        return view('crew.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'subid' => 'required',
            'name' => 'required',
        ]);

        Crew::create($request->all());

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $nama = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs(storage_path('photo'), $nama);
            $image = $path;
        }

        Crew::insert(['photo' => $image]);
        // Crew::update(['photo' => $image]);

        return redirect()->route('crew.index')
            ->with('success', 'Crew created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crew = Crew::where('subid', $id)->first();
        $exp = Experience::where('crew_id', $crew->id)->OrderBy('signoff', 'asc')->get();
        $tahunlama = Experience::where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('signon')->first();
        $lastvessel = Experience::with('shipname')->where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('vesselsname')->first();
        $document = Document::where('crew_id', $crew->id)->get();
        $certificate = Certificate::where('crew_id', $crew->id)->get();
        $medical = Medical::where('crew_id', $crew->id)->get();
        $contract = Contract::where('crew_id', $crew->id)->get();

        return view('crew.show', [
            'crew' => $crew,
            'exp' => $exp,
            'tahun' => $tahunlama,
            'lastvessel' => $lastvessel,
            'docs' => $document,
            'medicals' => $medical,
            'contracts' => $contract,
            'certificates' => $certificate

        ]);
    }

    public function document($crewid, $id)
    {
        $crew = Crew::where('subid', $crewid)->first();
        $document = Document::where('crew_id', $crew->id)->where('id', $id)->get();
        
        return response()->json($document);
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
    public function update(Request $request, Crew $crew)
    {
        $crew->update($request->all());

        if ($request->hasfile('photo')) {
            $nama = time() . '-' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $nama, ['disk' => 'public']);
            $image = $path;
        }

        $crew->update(['photo' => $image]);

        toast('Berhasil di update', 'success');
        return redirect()->back()
            ->with('success', 'Crew updated successfully');
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
    public function downloadxls()
    {
        // return Excel::download(new CrewExport, 'crew.xlsx');
    }


    
}
