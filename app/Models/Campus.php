<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function teachers(){
        return  User::where('campus_id',$this->id) ->where('id','>',4)->get();
    }
}
