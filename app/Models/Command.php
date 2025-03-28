<?php

namespace App\Models;
use App\Models\Tag;
use App\Models\Shell;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $with = ["tag","shell"];

    public function shell(){
        return $this->belongsTo(Shell::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
