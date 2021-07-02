<?php

namespace App\Http\Controllers;

use App\Models\Fees;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fees::find(1);
        return view('Admin.Fees.index', compact('fees'));
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
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fees, $id)
    {
        $fees = Fees::find($id);
        return view('Admin.Fees.edit', compact('fees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'monthly' => 'required',
            'central' => 'required',
        ],[
            'monthly.required' => 'Monthly fes field must not be empty',
            'central.required' => 'Central fes field must not be empty',
        ]);

        Fees::find($id)-> update([
            'monthly' => $request -> monthly,
            'central' => $request -> central,
        ]);

        return redirect() -> route('admin.fees.index') -> with('success', 'Fees Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees)
    {
        //
    }
}
