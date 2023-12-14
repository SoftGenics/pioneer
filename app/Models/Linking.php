<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linking extends Model
{
    use HasFactory;
    protected $fillable = [
        'hierarchy1', 'hierarchy2', 'hname1', 'hname2','status'
      ];
}
