<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreYunalishRequest;
use App\Http\Requests\UpdateYunalishRequest;
use App\Models\Yunalish;

class YunalishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yunalishes = Yunalish::all();
        return view('yunalish.index' , compact('yunalishes'));
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
    public function store(StoreYunalishRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Yunalish $yunalish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Yunalish $yunalish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateYunalishRequest $request, Yunalish $yunalish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yunalish $yunalish)
    {
        //
    }
}
