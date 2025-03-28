<?php

namespace App\Models;
use App\Models\Command;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $with = ["command"];
    
    public function command(){
        return $this->belongsTo(Command::class);
    }
}
