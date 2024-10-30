<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFakultyRequest;
use App\Http\Requests\UpdateFakultyRequest;
use App\Models\Fakulty;
use App\Models\University;
use Illuminate\Http\Request;

class FakultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakulties = Fakulty::all();
        return view('fakulty.index', compact('fakulties'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all();
        return view('fakulty.index' , compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
        ]);

        Fakulty::create([
            'name' => $request->name,
            'university_id' => $request->university_id,
        ]);

        return redirect()->route('faculties.create')->with('success', 'Faculty added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakulty $fakulty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakulty $fakulty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFakultyRequest $request, Fakulty $fakulty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakulty $fakulty)
    {
        //
    }
}
