<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image_path', 'created_at'];
}

    // Optionally, you can define any relationships here
    // For example, if a blog belongs to a user:
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

