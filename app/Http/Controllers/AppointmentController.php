<?php

namespace App\Http\Controllers;

use App\Models\Appoinntment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.appointment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.appointment.create');
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
     * @param  \App\Models\Appoinntment  $appoinntment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoinntment $appoinntment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appoinntment  $appoinntment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinntment $appoinntment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appoinntment  $appoinntment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoinntment $appoinntment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appoinntment  $appoinntment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinntment $appoinntment)
    {
        //
    }
}
