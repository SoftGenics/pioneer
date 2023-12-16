<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epost extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'segment', 'mode','address', 'type', 'status',
      'schedule','no_open','min_max','other','description','resume','posted_by'];
}
