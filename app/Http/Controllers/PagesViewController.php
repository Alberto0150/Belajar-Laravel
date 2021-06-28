<?php

namespace App\Http\Controllers;

use App\ConnectDBModel;
use Illuminate\Http\Request;

class PagesViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  \App\ConnectDBModel  $connectDBModel
     * @return \Illuminate\Http\Response
     */
    public function show(ConnectDBModel $connectDBModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConnectDBModel  $connectDBModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ConnectDBModel $connectDBModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConnectDBModel  $connectDBModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConnectDBModel $connectDBModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConnectDBModel  $connectDBModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConnectDBModel $connectDBModel)
    {
        //
    }
}
