<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'image', 'author'];

    public function setTitleAttribute($value) {
        $this->attributes['title'] = Str::title($value);
    }
}
