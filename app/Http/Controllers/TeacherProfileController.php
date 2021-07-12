<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Billing;
use App\Models\payment;
use App\Models\TeacherPayment;
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

    // Teacher Payment Create

    public function create(){
        return view('Admin.TeacherProfile.create');
    }


    // Teacher Payment Create

    public function store(Request $request){
        $teacher = Auth::user();
        $request -> validate([
            't_number' => 'required',
            'amount' => 'required',
            'type' => 'required',
            'comment' => 'required',
        ],[
            'amount.required' => 'Amount must not be empty!',
            't_number.required' => 'Transection number must not be empty!',
            'type.required' => 'Payment type must not be empty!',
            'comment.required' => 'Comment must not be empty!',
        ]);

        TeacherPayment::create([
            'teacher_id' => $teacher -> id,
            'campus_id' => $teacher -> campus_id,
            'name' => $teacher -> name,
            'phone' => $teacher -> phone,
            'transection_number' => $request -> t_number,
            'amount' => $request -> amount,
            'type' => $request -> type,
            'comment' => $request -> comment,
        ]);

        return redirect() -> back() -> with('success', 'Payment Added Successfull!');
    }

    // Teacher Payment Create

    public function list(){
        $teacher = Auth::user();
        $payment_list = TeacherPayment::orderBy('id','DESC') -> where('teacher_id', $teacher -> id) -> get();
        return view('Admin.TeacherProfile.paymentList', compact('payment_list'));
    }
}
