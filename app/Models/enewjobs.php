<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enewjobs extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title',
    'date',
    'salary',
    'start_time',
    'end_time',
    'job_detail',
    'location',
        ];
}
