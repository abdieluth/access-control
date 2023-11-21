<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\Access;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Accesos con el usuairo 
        $access = Access::with('user')->get();

        return view('access.index', compact('access'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id): View
    {
        $user = User::find($id);
        return view('access.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $user_id)
    {
        $request->validate([
            'type' => 'required',
            'date' => 'required',
        ]);

        $access = new Access();
        $access->user_id = $user_id;
        // $access->type = $request->type;
        $access->created_at = $request->date;
        $access->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
