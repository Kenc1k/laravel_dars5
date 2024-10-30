<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuruxRequest;
use App\Http\Requests\UpdateGuruxRequest;
use App\Models\Gurux;

class GuruxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guruxes = Gurux::all();
        return view('gurux.index' , compact('guruxes'));
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
    public function store(StoreGuruxRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gurux $gurux)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gurux $gurux)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruxRequest $request, Gurux $gurux)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gurux $gurux)
    {
        //
    }
}
