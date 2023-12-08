<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            $catatans = Catatan::where('user_id', $user->id)->get();
            return view('catatan.index', compact('catatans'));
        };
        if ($user->role_id == 2) {
            $catatans = Catatan::all();
            return view('catatan.index', compact('catatans'));
        };
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Catatan $catatan, User $user)
    {
        //
        $user = User::all();
        return view('catatan.create', compact('catatan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Catatan $catatan)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
           ]);
    
           $catatan = new Catatan;
           $catatan->user_id = $request->user_id;
           $catatan->tanggal = $request->tanggal;
           $catatan->waktu = $request->waktu;
           $catatan->lokasi = $request->lokasi;
           $catatan->suhu = $request->suhu;
           $catatan->save();
    
           return redirect()->route('catatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catatan $catatan)
    {
        //
        return view('catatan.show', compact('catatan'));
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
            'nama' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ]);

        $catatan->update($request->all());

        return redirect()->route('user.show', $catatan->user_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catatan $catatan)
    {
        //
        $catatan = Catatan::where('id', $catatan->id)->delete();
        return redirect()->route('catatan.index');
    }
}
