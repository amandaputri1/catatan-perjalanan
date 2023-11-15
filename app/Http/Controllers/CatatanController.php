<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $catatans = Catatan::all();
        return view('catatan.index', compact('catatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('catatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Catatan $catatans)
    {
        //
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
           ]);
    
           $catatans = new Catatan;
           $catatans->tanggal = $request->tanggal;
           $catatans->waktu = $request->waktu;
           $catatans->lokasi = $request->lokasi;
           $catatans->suhu = $request->suhu;
           $catatans->save();
    
           return redirect()->route('catatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catatan $catatans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catatan $catatan)
    {
        //
        return view('catatan.edit', compact('catatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catatan $catatan)
    {
        //
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ]);

        $catatan->update($request->all());

        return redirect()->route('catatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catatan $catatans)
    {
        //
        $catatans = Catatan::where('id', $catatans->id)->delete();
        return redirect()->route('catatan.index');
    }
}
