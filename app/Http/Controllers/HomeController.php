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
            'type' => 'required',
        ], [
            'amount.required' => 'Amount must not be empty!',
            'type.required' => 'Amount type must not be empty!',
        ]);

        $fees = Fees::find(1);
        if($request -> type == 'monthly' and  ($request->amount %  $fees->monthly !=0))
        {
         return "Error";
        }
        Billing::create([
            'amount' => $request->amount,
            'user_id' => $request->user_id,
            'type' => $request -> type,
            'comment' => $request -> comment,
        ]);

        if($request -> type == 'monthly'){
            $fees = Fees::find(1);
            $month = $request->amount / $fees->monthly;
            $teacher = User::find($request->user_id);
            $lastMonth = $teacher->payments->first()->month;
            $lastYear = $teacher->payments->first()->year;

            $central_amount = (($fees->monthly * 10) / 100);
            $campus_amount = $fees->monthly - $central_amount;


            for($i=1 ; $i<=$month ; $i++){
                $lastMonth ++;

                if($lastMonth==13){
                    $lastMonth=1;
                    $lastYear ++;
                }

                $payment= new payment;
                $payment->user_id = $teacher->id;
                $payment->type = 'campus';
                $payment->campus_id = $teacher->campus_id;
                $payment->month = $lastMonth;
                $payment->year = $lastYear;
                $payment->amount = $campus_amount;
                $payment->save();

                $payment= new payment;
                $payment->user_id = $teacher->id;
                $payment->type = 'central';
                $payment->campus_id = $teacher->campus_id;
                $payment->month = $lastMonth;
                $payment->year = $lastYear;
                $payment->amount = $central_amount;
                $payment->save();
            }
        }

    //    return compact('lastMonth','lastYear');


        return redirect()->back()->with('success', 'Amount Added Successful');
    }
}
