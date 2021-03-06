<?php

namespace App\Http\Controllers;

use App\Models\VariableGroups;
use Illuminate\Http\Request;

class VariableGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(VariableGroups::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VariableGroups  $variableGroups
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(VariableGroups $variableGroups)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VariableGroups  $variableGroups
     * @return \Illuminate\Http\Response
     */
    public function edit(VariableGroups $variableGroups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VariableGroups  $variableGroups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VariableGroups $variableGroups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VariableGroups  $variableGroups
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariableGroups $variableGroups)
    {
        //
    }
}
