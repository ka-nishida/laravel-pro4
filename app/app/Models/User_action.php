<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_action extends Model
{
    public function mail() {
        return $this->hasOne('App\Models\Mail');
    }
    use HasFactory;
}
