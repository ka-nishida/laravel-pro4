<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model
{
    public function mail_admin_user() {
        return $this->hasMany('App\Models\Mail_admin_user');
    }
    use HasFactory;
}
