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

        $ispay = payment::where('user_id', $teacher-> id) -> orderBy('month', 'DESC')  -> get();


        return view('Admin.TeacherProfile.index', compact('notices', 'billings', 'ispay'));
    }
}
