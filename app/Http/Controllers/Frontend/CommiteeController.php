<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Committee;

class CommiteeController extends Controller
{
    public function central(){
        $centrals = Committee::orderBy('position', 'ASC') -> where('campus_id',5) -> get();
        return view('centralCommitee', compact('centrals'));
    }
    public function sec(){
        $secs = Committee::orderBy('position', 'ASC') -> where('campus_id',1) -> get();
        return view('secCommitee', compact('secs'));
    }
    public function mec(){
        $mecs = Committee::orderBy('position', 'ASC') -> where('campus_id',2) -> get();
        return view('mecCommitee', compact('mecs'));
    }
    public function fec(){
        $fecs = Committee::orderBy('position', 'ASC') -> where('campus_id',3) -> get();
        return view('fecCommitee', compact('fecs'));
    }
    public function bec(){
        $becs = Committee::orderBy('position', 'ASC') -> where('campus_id',4) -> get();
        return view('becCommitee', compact('becs'));
    }
}
