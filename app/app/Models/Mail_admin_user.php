<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail_admin_user extends Model
{
    public function admin_user() {
        return $this->belongsTo('App\Models\Admin_user');
    }
    public function mail() {
        return $this->hasOne('App\Models\Mail');
    }
    use HasFactory;
}
