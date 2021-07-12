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
        $notices = Notice::all() -> take(6);
        $admins = User::where('id', '<', '6') -> where('id', '>', '1') -> get();
        $centrals = Committee::orderBy('position', 'ASC') -> where('campus_id',5) -> get();
        return view('index', [
            'campuses' => $campuses,
            'notices' => $notices,
            'admins' => $admins,
            'centrals' => $centrals,
        ]);
    }
}
