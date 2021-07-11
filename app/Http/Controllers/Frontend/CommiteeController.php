<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommiteeController extends Controller
{
    public function central(){
        return view('centralCommitee');
    }
    public function sec(){
        return view('secCommitee');
    }
    public function mec(){
        return view('mecCommitee');
    }
    public function fec(){
        return view('fecCommitee');
    }
    public function bec(){
        return view('becCommitee');
    }
}
