<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::select('universities.id', 'universities.name')
            ->leftJoin('fakulties', 'fakulties.university_id', '=', 'universities.id')
            ->leftJoin('yunalishes', 'yunalishes.faculty_id', '=', 'fakulties.id')
            ->leftJoin('guruxes', 'guruxes.yunalish_id', '=', 'yunalishes.id')
            ->leftJoin('talabas', 'talabas.gurux_id', '=', 'guruxes.id')
            ->groupBy('universities.id', 'universities.name')
            ->selectRaw('
                count(distinct fakulties.id) as f_count,
                count(distinct yunalishes.id) as y_count,
                count(distinct guruxes.id) as g_count,
                count(distinct talabas.id) as t_count
            ')
            ->get();
    
        return view('university.index', compact('universities'));
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
    public function store(StoreUniversityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUniversityRequest $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
    }
}
