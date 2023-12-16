<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eprofile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'cname', 'cphone', 'cemail','name', 'phone', 'cem_no', 'designation', 'industry','location', 'description', 'docs','status'
      ];
}
