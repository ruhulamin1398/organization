<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $user = User::all();
        return view('Admin.index', compact('user'));
    }

    // Billing Store
    public function storeBilling(Request $request){
        $request -> validate([
            'amount' => 'required',
        ],[
            'amount.required' => 'Amount must not be empty!',
        ]);

        Billing::create([
            'amount' => $request -> amount,
            'user_id' => $request -> user_id,
        ]);

        return redirect() -> back() -> with('success', 'Amount Added Successful');
    }
}
