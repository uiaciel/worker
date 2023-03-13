<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Port;
use App\Models\National;
use App\Models\Shipname;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function printing()
    {
        return view('printing');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function setting()
    {
        $shipname = Shipname::orderBy('name', 'asc')->get();

        return view('setting', [
            'shipname' => $shipname
        ]);
    }

    public function storeshipname(Request $request)
    {

        $shipname = new Shipname;
        $shipname->name = $request->name;
        $shipname->save();

        toast('Shipname added.', 'success');
        return redirect()->back();
    }

    public function filter($id)
    {
        $crews = Crew::with('job')->where('job_id', $id)->get();
        return json_encode($crews);
    }
}
