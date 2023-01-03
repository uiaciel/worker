<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kliens = Klien::all();

        return view('klien.index', [
            'kliens' => $kliens

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klien = new Klien;
        $klien->nama = $request->nama;
        $klien->user_id = $request->user_id;
        $klien->save();

        toast('Post created successfully.','success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function show(Klien $klien)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function edit(Klien $klien)
    {
        return view('klien.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klien $klien)
    {
        $klien->update($request->all());

        toast('Client updated.','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klien $klien)
    {
        $klien->delete();

        toast('Client deleted.','success');
        return redirect()->back();
    }
}
