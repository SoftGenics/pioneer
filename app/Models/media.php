<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'category', 'mediafile', 'about_media', 
      ];
}
