<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id', 'offer_free', 'privacy', 'canteach','alang', 'subject', 'segment', 'fees',
        'asell', 'killvideo', 'experienceofforeign','aref','aproject','agovtype','aregfee','arefnm'
        ,'arefph','acerti','agovtid','aqualif','aphoto','aterm'
        
    ];
}
