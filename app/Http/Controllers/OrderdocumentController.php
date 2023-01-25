<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdocument;
use Illuminate\Http\Request;

class OrderdocumentController extends Controller
{

    public function index()
    {
        $orderdocuments = Orderdocument::all();

        return view('orderdocument.index', [
            'orderdocuments' => $orderdocuments

        ]);
    }

    public function create()
    {
        return view('orderdocument.create');
    }

    public function store(Request $request)
    {
        // Orderdocument::create($request->all());

        $document = new Orderdocument;
        $document->order_id = $request->order_id;
        $document->type = $request->type;

        $fileName = time() . '-' . $request->type . '-' . $request->order_id . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);

        $document->path = '/file/' . $fileName;
        $document->save();

        Order::where('id', $request->order_id)->update([
            'step_6' => 1
        ]);


        toast('Orderdocument created successfully.', 'success');
        return redirect()->back();
    }

    public function show(Orderdocument $orderdocument)
    {
        //
    }

    public function edit(Orderdocument $orderdocument)
    {
        $orderdocuments = Orderdocument::find($orderdocument)->first();
        $orderdocumentx = Orderdocument::all();

        return view('company.edit', [
            'orderdocuments' => $orderdocuments,
            'orderdocumentx' => $orderdocumentx
        ]);
    }

    public function update(Request $request, Orderdocument $orderdocument)
    {
        $orderdocument->update($request->all());

        toast('Orderdocument updated.', 'success');
        return redirect()->back();
    }

    public function destroy(Orderdocument $orderdocument)
    {
        $orderdocument->delete();

        toast('Orderdocument deleted.', 'success');
        return redirect()->back();
    }
}
