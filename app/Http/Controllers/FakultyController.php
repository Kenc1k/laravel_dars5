<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFakultyRequest;
use App\Http\Requests\UpdateFakultyRequest;
use App\Models\Fakulty;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFakultyRequest $request)
    {
        //
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
