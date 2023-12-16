<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandiateModel extends Model
{
    use HasFactory;
    protected $fillable = ['apply_id', 'job_id', 'jobpost_id', 'body', 'for', 'status'];
}
