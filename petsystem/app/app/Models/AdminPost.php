<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPost extends Model
{
    protected $fillable = ['hospital', 'title', 'body'];

    public function comments()
    {
        return $this->hasMany('App\AdminComments');
    }
}
