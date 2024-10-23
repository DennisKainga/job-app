<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_form extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_description',
        'job_nature',
        'company_name',
        'job_salary',
        'job_category',
    ];
}
