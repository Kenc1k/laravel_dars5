<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalabaRequest;
use App\Http\Requests\UpdateTalabaRequest;
use App\Models\Talaba;

class TalabaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $talabas = Talaba::all();
        return view('talaba.index' , compact('talabas'));
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
    public function store(StoreTalabaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Talaba $talaba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talaba $talaba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTalabaRequest $request, Talaba $talaba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talaba $talaba)
    {
        //
    }
}
