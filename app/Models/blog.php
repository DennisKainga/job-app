<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    // Define the table name if it's not the default 'blogs'
    protected $table = 'blogs';

    // Mass assignable attributes
    protected $fillable = [
        'title',
        'description',
        'content_path',
    ];

    // Optionally, you can define any relationships here
    // For example, if a blog belongs to a user:
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
