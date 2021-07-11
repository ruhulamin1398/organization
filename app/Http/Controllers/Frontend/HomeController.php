<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use App\Models\Committee;
use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $campuses = Campus::all();
        $campus_count = Campus::all()->count();
        $teacher_count = User::where('id', '>', '6') -> get() -> count();
        $admin_count = User::where('id', '<', '6') -> get() -> count();
        $commitee_count = Committee::all() -> count();
        $notices = Notice::all() -> take(6);
        return view('index', [
            'campuses' => $campuses,
            'campus_count' => $campus_count,
            'teacher_count' => $teacher_count,
            'admin_count' => $admin_count,
            'commitee_count' => $commitee_count,
            'notices' => $notices,
        ]);
    }
}
