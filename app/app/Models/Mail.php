<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //リレーション
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
