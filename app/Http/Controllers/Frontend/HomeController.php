<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $campuses = Campus::all();
        return view('index', [
            'campuses' => $campuses,
        ]);
    }
}
