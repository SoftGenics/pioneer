<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Globleassignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'user_id', 'assignment','date', 'assingmenet_file'
      ];
}
