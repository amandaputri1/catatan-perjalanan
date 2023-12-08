<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user, Catatan $catatans)
    {
        //
        $users = User::where('role_id', 1)->get()->unique('id');
        $catatans = Catatan::all();
        return view('catatan.data', compact('users', 'catatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id, User $user, Catatan $catatans)
    {
        //
        $user = Auth::user();

        if ($user->role_id == 1) {
            $catatans = Catatan::where('user_id', $user->id)->get();
            return view('catatan.index', compact('catatans'));
        };

        if ($user->role_id == 2) {
            $catatans = Catatan::where('user_id', $id)->get();
            return view('catatan.index', compact('catatans'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
