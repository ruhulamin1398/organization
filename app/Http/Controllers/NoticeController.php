<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Notice;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus = Auth::user() -> campus;
        $notices = Notice::all();
        return view('Admin.Notices.index', compact('notices','campus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campus =  Auth::user()->campus;
        return view('Admin.Notices.create', compact('campus'));
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
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.reqired' => 'Title must not be empty!',
            'description.reqired' => 'Title must not be empty!',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $unique_name = md5(time().rand()).'.'. $image -> getClientOriginalExtension();
            $image -> move(public_path('images/notices'), $unique_name);
        }
        else{
            $unique_name = '';
        }

        Notice::create([
            'campus_id' => $request -> id,
            'title' => $request -> title,
            'description' => $request -> description,
            'file' => $unique_name,
        ]);

        return redirect() -> back() -> with('success', 'Notice Added Successfull!');

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
        $notice = Notice::find($id);
        return view('Admin.Notices.edit', compact('notice'));
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
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.reqired' => 'Title must not be empty!',
            'description.reqired' => 'Title must not be empty!',
        ]);

        if($request->hasFile('image')){
            unlink('images/notices/'. $request -> old_photo);
            $image = $request->file('image');
            $unique_name = md5(time().rand()).'.'. $image -> getClientOriginalExtension();
            $image -> move(public_path('images/notices'), $unique_name);

            Notice::find($id)->update([
                'title' => $request -> title,
                'description' => $request -> description,
                'file' => $unique_name,
            ]);

        }else{
            Notice::find($id)->update([
                'title' => $request -> title,
                'description' => $request -> description,
            ]);
        }

        return redirect() -> back() -> with('success', 'Notice Updated Successfull!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $notice = Notice::find($id);
        $notice_image = $notice -> file;
        unlink('images/notices/'. $notice_image);
        $notice -> delete();

        return redirect() -> back() -> with('success', 'Notice Deleted Successfull!');
    }
}
