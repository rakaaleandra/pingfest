<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUmum extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id', 'NIK', 'identification_card',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}