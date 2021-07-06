<?php

namespace App\Http\Controllers;

use App\Models\Central;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentralController extends Controller
{


    //Central payment create
    public function create(){
        $admin = Auth::user();
        $payment = payment::where('campus_id',$admin->campus_id)->where('type','central') -> get();
        $centrals = Central::where('campus_id', $admin->campus_id) -> get();
        $total_central_fee = 0;
        $paid_central_fee = 0;
        foreach($centrals as $central){
            $paid_central_fee += $central -> amount;
        }
        foreach($payment as $pay){
            $total_central_fee += $pay -> amount;
        }
        $due_central_fee = $total_central_fee - $paid_central_fee;
        return view('Admin.Central.create', compact('due_central_fee'));
    }
    // central payment store
    public function store(Request $request){
        $admin = Auth::user();
        $request -> validate([
            'amount' => 'required',
        ],[
            'amount.reqired' => 'Amount must not be empty!',
        ]);

        Central::create([
            'admin_id' => $request -> id,
            'campus_id' => $admin -> campus_id,
            'amount' => $request -> amount,
        ]);

        return redirect() -> back() -> with('success', 'Central Payment Added Successfull!');
    }
}
