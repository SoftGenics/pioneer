<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersanalInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id', 'f_name', 'l_name', 'email', 'number', 'dob', 'gender', 'address', 'country', 'state', 'city', 'pincode', 'area'
    ];
}
