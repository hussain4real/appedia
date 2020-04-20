<?php

namespace App\Http\Controllers;

use App\Mall;
use Illuminate\Http\Request;

class MallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malls = Mall::all();

        return response()->json([
            'malls' => $malls,

        ],201);
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
     * @param  \App\Mall  $mall
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $mall = Mall::where('id', $id)->firstOrFail();

        return response()->json([
            'mall' => $mall,

        ],201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mall  $mall
     * @return \Illuminate\Http\Response
     */
    public function edit(Mall $mall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mall  $mall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mall $mall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mall  $mall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mall $mall)
    {
        //
    }
}
