<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fees;
use Carbon\Carbon;

class TeacherController extends Controller
{
    public function index(Request $request)
    {

        $type = $request->type;
        $teachers =  Auth::user()->campus->teachers();
        if ($request->month) {

            $month =   Carbon::createFromFormat('Y-m', $request->month)->format('m');
            $year  =  Carbon::createFromFormat('Y-m', $request->month)->format('Y');
            // return compact('month','year');


            if ($request->type == 'monthly') {

                $billings = Billing::where('type', 'monthly')->whereMonth('created_at', $month)->get();


           

                foreach ($teachers  as $teacher) {
                    $ispay =  payment::where('user_id', $teacher->id)->where('year', $year)->where('month', $month)->first();
                    if (!is_null($ispay)) {
                        $teacher->ispay = 'Paid';
                    } else {
                        $teacher->ispay = 'Unpaid';
                    }
                }
            } else if ($request->type == 'others') {
                $billings = Billing::where('type', 'others')->whereMonth('created_at', $month)->get();
            } else {
                $billings = Billing::whereMonth('created_at', $month)->get();
            }

            return view('Admin.Teacher.index', compact('billings', 'type','teachers'));
        } 
        
        else {
            $month =   now()->format('m');
            $year  = now()->format('Y');
            // return compact('month','year');


            if ($request->type == 'monthly') {

                $billings = Billing::where('type', 'monthly')->whereMonth('created_at', $month)->get();


           

                foreach ($teachers  as $teacher) {
                    $ispay =  payment::where('user_id', $teacher->id)->where('year', $year)->where('month', $month)->first();
                    if (!is_null($ispay)) {
                        $teacher->ispay = 'Paid';
                    } else {
                        $teacher->ispay = 'Unpaid';
                    }
                }
            } else if ($request->type == 'others') {
                $billings = Billing::where('type', 'others')->whereMonth('created_at', $month)->get();
            } else {
                $billings = Billing::whereMonth('created_at', $month)->get();
            }

            return view('Admin.Teacher.index', compact('billings', 'type','teachers'));


        }


    }
}
