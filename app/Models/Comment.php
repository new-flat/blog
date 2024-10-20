<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'comment', 'author'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
