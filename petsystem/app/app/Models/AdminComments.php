<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminComments extends Model
{
    protected $fillable = ['name', 'contact', 'comment','post_id'];
}
