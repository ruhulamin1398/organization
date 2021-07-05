<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Billing;
use App\Models\payment;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherProfileController extends Controller
{
    public function index(){
        $notices = Notice::latest() -> get();
        $currentYear = (int) Carbon::now()->format('Y');
        $teacher = Auth::user();

        $billings = Billing::whereYear('created_at', $currentYear) -> get();

        $monthlyPayments = payment::where('user_id', $teacher-> id) -> where('year',$currentYear)-> orderBy('month', 'DESC') -> get();
        $monthArray= [];
        foreach($monthlyPayments as $payment){
            $monthArray[$payment->month]=$payment->created_at;

        }



        return view('Admin.TeacherProfile.index', compact('notices', 'billings', 'monthArray'));
    }
}
