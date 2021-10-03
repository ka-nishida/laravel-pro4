<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //リレーション
    public function mail_admin_user() {
        return $this->belongsTo('App\Models\Mail_admin_user');
    }
    public function user_action() {
        return $this->belongsTo('App\Models\User_action');
    }
    public function user() {
        return $this->hasOne('App\Models\User');
    }
    use HasFactory;
}
