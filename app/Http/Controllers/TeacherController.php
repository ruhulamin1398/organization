<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fees;

class TeacherController extends Controller
{
    public function index(Request $request){

        // $teachers =  Auth::user()->campus->teachers();
        $teachers = Auth::user()->billings;
        return $teachers;
        $totalMonth = 0;

        // if($request -> type == 'monthly'){
        //     foreach ($teachers as $teacher) {
        //         $fees = Fees::find(1);
        //         if (!is_null($teacher->payments)) {
        //             $months = 0;
        //             foreach($teacher->payments as $payment){
        //                 $months ++;
        //             }
        //             $teacher -> months = $months;
        //             $teacher -> totalAmount = $fees -> monthly * $months;
        //         }
        //     }
        //     return view('Admin.Teacher.index', compact('teachers'));
        // }

        if($request -> type == 'monthly'){
            foreach ($teachers as $teacher) {
                $fees = Fees::find(1);
                if (!is_null($teacher->payments)) {
                    $months = 0;
                    foreach($teacher->payments as $payment){
                        $months ++;
                    }
                    $teacher -> months = $months;
                    $teacher -> totalAmount = $fees -> monthly * $months;
                }
            }
            return view('Admin.Teacher.index', compact('teachers'));
        }


    }
}
