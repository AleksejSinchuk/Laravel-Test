<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomlete(){
        return static ::where('completed',0)->get();
    }
}
