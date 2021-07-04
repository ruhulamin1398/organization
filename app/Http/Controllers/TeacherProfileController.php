<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherProfileController extends Controller
{
    public function index(){
        $teachers =  Auth::user()->campus->teachers();
        return $teachers;
        return view('Admin.TeacherProfile.index');
    }
}
