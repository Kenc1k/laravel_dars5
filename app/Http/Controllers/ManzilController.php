<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManzilRequest;
use App\Http\Requests\UpdateManzilRequest;
use App\Models\Manzil;

class ManzilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manzils = Manzil::all();
        return view('manzil.index' ,compact('manzils') );
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
    public function store(StoreManzilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Manzil $manzil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manzil $manzil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManzilRequest $request, Manzil $manzil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manzil $manzil)
    {
        //
    }
}
