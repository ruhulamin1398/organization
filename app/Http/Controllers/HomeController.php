<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Fees;
use App\Models\payment;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Diue
        $fees = Fees::find(1);
        $monthlyFees = $fees->monthly;

        $teachers =  Auth::user()->campus->teachers();

        foreach ($teachers as $teacher) {
            if (!is_null($teacher->payments->first())) {
                $currentMonth = (int) Carbon::now()->format('m');
                $lastMonth = $teacher->payments->first()->month;
                $currentYear = (int) Carbon::now()->format('Y');
                $lastYear = $teacher->payments->first()->year;

                $dueMonth = (($currentYear -  $lastYear) * 12) + ($currentMonth - $lastMonth);

                $teacher->due_month = $dueMonth;
                $teacher->due = $dueMonth * $monthlyFees;
            }

        }

        // return $billings;

        return view('Admin.index', compact('teachers'));
        // return $teachers;
    }

    // Billing Store
    public function storeBilling(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ], [
            'amount.required' => 'Amount must not be empty!',
        ]);

        Billing::create([
            'amount' => $request->amount,
            'user_id' => $request->user_id,
        ]);

        $fees = Fees::find(1);
        $month = $request->amount / $fees->monthly;


        $teacher = User::find($request->user_id);
        $lastMonth = $teacher->payments->first()->month;
        $lastYear = $teacher->payments->first()->year;


    for($i=0 ; $i<$month ; $i++){
        $lastMonth ++;

        if($lastMonth==13){
            $lastMonth=1;
            $lastYear ++;
        }

        $payment= new payment;
        $payment->user_id = $teacher->id;
        $payment->month = $lastMonth;
        $payment->year = $lastYear;
        $payment->amount = $fees->monthly;
        $payment->save();



    }

    //    return compact('lastMonth','lastYear');


        return redirect()->back()->with('success', 'Amount Added Successful');
    }
}
