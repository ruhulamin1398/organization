<?php

namespace App\Http\Controllers;

use App\Models\Central;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentralController extends Controller
{
    public function index(){
        $admin = Auth::user();
        $payment_request = Central::orderBy('id','DESC') -> where('admin_id', $admin -> id) -> get();
        return view('Admin.Central.index', compact('payment_request'));
    }

    //Central payment create
    public function showDeu(){
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
            't_number' => 'required',
        ],[
            'amount.reqired' => 'Amount must not be empty!',
            't_number.reqired' => 'Transection number must not be empty!',
        ]);

        Central::create([
            'admin_id' => $request -> id,
            'campus_id' => $admin -> campus_id,
            't_number' => $request -> t_number,
            'amount' => $request -> amount,
            'admin_comment' => $request -> comment,
        ]);

        return redirect() -> back() -> with('success', 'Central Payment Added Successfull!');
    }

    // Central admin Fee
    public function feeShow(){
        $fees = Central::all();
        return view('Admin.CentralFee.index', compact('fees'));
    }
    public function update(Request $request, $id){
        $payment = Central::find($id);
        $payment -> update([
            'central_comment' => $request -> comment,
            'status' => $request -> status,
        ]);
        return redirect() -> back() -> with('success', 'Admin payment updated successfull');
    }
}
