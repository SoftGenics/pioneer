<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;
    protected $fillable = [
        'incoming_user_id','outgoing_user_id','message','incoming_user_id_img','outgoing_user_id_img','status'
      ];
}
