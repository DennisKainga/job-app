<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cv extends Model
{

    protected $fillable = [
        'user_id',
        'cvpath',
    ];

    public function cv(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
