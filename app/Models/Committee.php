<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function campuses(){
        return $this -> belongsTo(Campus::class, 'campus_id', 'id');
    }
}
