<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKursRequest;
use App\Http\Requests\UpdateKursRequest;
use App\Models\Kurs;

class KursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurses = Kurs::all();
        return view('kurs.index' , compact('kurses'));
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
    public function store(StoreKursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kurs $kurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kurs $kurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKursRequest $request, Kurs $kurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kurs $kurs)
    {
        //
    }
}
