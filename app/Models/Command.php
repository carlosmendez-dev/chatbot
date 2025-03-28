<?php

namespace App\Models;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $with = ["tag"];
    
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
