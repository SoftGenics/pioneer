<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class srequirement extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id', 's_name', 'date', 'rate', 'stime', 'etime', 'notes', 'pincode', 'class', 'city', 'subject',];

    
}
