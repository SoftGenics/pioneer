<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    use HasFactory;

    protected $fillable = [
        
       
        'name', 'profile', 'usertype', 'email', 'email_verified_at', 'location', 'password', 'remember_token'
    ];

}
