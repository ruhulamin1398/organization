<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class NoticeController extends Controller
{
    public function index(){
        $notices = Notice::latest()->paginate(2);
        return view('notice', compact('notices'));
    }
}
