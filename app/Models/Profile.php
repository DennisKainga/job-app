<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'city',
        'state',
        'zip',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
