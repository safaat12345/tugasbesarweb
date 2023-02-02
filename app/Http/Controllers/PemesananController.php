<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psn = orders::all();
        return view('tampilan.pesanan.pesanan', compact('psn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $psn = new orders;
        return view('tampilan.pesanan.tambah', compact('psn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psn = new orders();
        $psn->name = $request->name;
        $psn->qtyc = $request->qtyc;
        $psn->perqtyc = $request->perqtyc;
        $psn->qtya = $request->qtya;
        $psn->perqtya = $request->perqtya;
        $psn->qtyb = $request->qtyb;
        $psn->perqtyb = $request->perqtyb;
        $psn->coffes_id = $request->coffes_id;
        $psn->bvrages_id = $request->bvrages_id;
        $psn->blands_id = $request->blands_id;
        $psn->save();

        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psn = orders::find($id);
        return view('tampilan.pesanan.edit', compact('psn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $psn = orders::find($id);
        $psn->name = $request->name;
        $psn->qtyc = $request->qtyc;
        $psn->perqtyc = $request->perqtyc;
        $psn->qtya = $request->qtya;
        $psn->perqtya = $request->perqtya;
        $psn->qtyb = $request->qtyb;
        $psn->perqtyb = $request->perqtyb;
        $psn->coffes_id = $request->coffes_id;
        $psn->bvrages_id = $request->bvrages_id;
        $psn->blands_id = $request->blands_id;
        $psn->save();

        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psn = orders::find($id);
        $psn->delete();
        return redirect('/orders');
    }
}
