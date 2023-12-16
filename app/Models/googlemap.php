<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class googlemap extends Model
{
    use HasFactory;
    protected $fillable=[
       'user_id', 'lat', 'lng', 'quantity'
        
    ];
}
