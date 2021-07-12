<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Central extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function admin(){
        return $this -> belongsTo(User::class);
    }
    public function campus(){
        return $this -> belongsTo(Campus::class);
    }
}
