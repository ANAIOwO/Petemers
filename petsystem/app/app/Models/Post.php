<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body','name'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addcomment($body,$name)
    {
        $this->comments()->create(compact('body','name'));
        /*
        Comment::create([
            'body' => 'body',
            'post_id' => $this->id,
        ]);
        */
    }
}
