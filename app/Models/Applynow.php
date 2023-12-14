<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applynow extends Model
{
    use HasFactory;
    protected $fillable = [
        'apply_id','job_id','jobpost_id', 'resume', 'body', 'for'
      ];
}
