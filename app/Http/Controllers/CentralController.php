<?php

namespace App\Http\Controllers;

use App\Models\Central;
use Illuminate\Http\Request;

class CentralController extends Controller
{


    //Central payment create
    public function create(){
        return view('Admin.Central.create');
    }
    // central payment store
    public function store(Request $request){
        $request -> validate([
            'amount' => 'required',
        ],[
            'amount.reqired' => 'Amount must not be empty!',
        ]);

        Central::create([
            'admin_id' => $request -> id,
            'amount' => $request -> amount,
        ]);

        return redirect() -> back() -> with('success', 'Central Payment Added Successfull!');
    }
}
