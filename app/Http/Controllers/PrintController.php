<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Crew;
use App\Models\Klien;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Order;
use App\Models\Ordercrew;
use App\Models\User;
use App\Models\Orderjob;
use App\Models\Experience;
use App\Models\Medical;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $order = Order::where('inv', $id)->first();
        $orderjob = Orderjob::where('order_id', $order->id)->get();
        $crew = Crew::All();
        $ordercrew = Ordercrew::where('order_id', $order->id)->get();


        $data = [
            'order' => $order,
            'crew' => $crew,
            'orderjob' => $orderjob,
            'ordercrew' => $ordercrew,
        ];
        // $pdf = PDF::loadView('print.order', $data);

        //Aktifkan Local File Access supaya bisa pakai file external ( cth File .CSS )
        $pdf->setOption('enable-local-file-access', true);
        // Stream untuk menampilkan tampilan PDF pada browser
        return $pdf->stream('table.pdf');
        // return view('print.order', [
        //     'order' => $order,
        //     'crew' => $crew,
        //     'orderjob' => $orderjob,
        //     'ordercrew' => $ordercrew,
        // ]);

    }

    public function klien($id)
    {
        $crew = Crew::where('subid', $id)->first();
        $exp = Experience::where('crew_id', $crew->id)->OrderBy('signoff', 'asc')->get();
        $tahunlama = Experience::where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('signon')->first();
        $lastvessel = Experience::with('shipname')->where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('vesselsname')->first();
        $document = Document::where('crew_id', $crew->id)->get();
        $certificate = Certificate::where('crew_id', $crew->id)->get();
        $medical = Medical::where('crew_id', $crew->id)->get();
        $contract = Contact::where('crew_id', $crew->id)->get();

        $exp = Experience::where('crew_id', $crew->id)->OrderBy('signoff', 'desc')->get();
        $usr = User::All();
        $kliens = Klien::All();
        $companys = Company::All();
        $tahunlama = Experience::where('crew_id', $crew->id)->OrderBy('signon', 'asc')->pluck('signon')->first();

        return view('print.crews', [
            'crew' => $crew,
            'exp' => $exp,
            'usr' => $usr,
            'kliens' => $kliens,
            'companys' => $companys,
            'tahun' => $tahunlama,
            'lastvessel' => $lastvessel,
            'docs' => $document,
            'medicals' => $medical,
            'contracts' => $contract,
            'certificates' => $certificate

        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
