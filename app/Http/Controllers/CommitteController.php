<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committies = Committee::orderBy('position', 'DESC') -> get();
        return view('Admin.Committee.index', compact('committies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Committee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'campus_id' => 'required',
            'position' => 'required',
            'designation' => 'required',
            'session' => 'required',
        ],[
            'name.required' => 'Name field must not be empty',
            'campus_id.required' => 'Campus field must not be empty',
            'position.required' => 'Position field must not be empty',
            'designation.required' => 'Designation field must not be empty',
            'session.required' => 'Session field must not be empty',
        ]);

        Committee::create([
            'name' => $request -> name,
            'campus_id' => $request -> campus_id,
            'position' => $request -> position,
            'designation' => $request -> designation,
            'session' => $request -> session,
        ]);

        return redirect() -> route('central.commitee.index') -> with('success', 'Committee Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $committie = Committee::find($id);
        return view('Admin.Committee.edit', compact('committie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $committie = Committee::find($id);
        $request -> validate([
            'name' => 'required',
            'campus_id' => 'required',
            'position' => 'required',
            'designation' => 'required',
            'session' => 'required',
        ],[
            'name.required' => 'Name field must not be empty',
            'campus_id.required' => 'Campus field must not be empty',
            'position.required' => 'Position field must not be empty',
            'designation.required' => 'Designation field must not be empty',
            'session.required' => 'Session field must not be empty',
        ]);

        $committie -> update([
            'name' => $request -> name,
            'campus_id' => $request -> campus_id,
            'position' => $request -> position,
            'designation' => $request -> designation,
            'session' => $request -> session,
        ]);

        return redirect() -> route('central.commitee.index') -> with('success', 'Committee Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Committee::find($id) -> delete();
        return redirect() -> back() -> with('success', 'Committee Deleted Successfull');
    }
}
