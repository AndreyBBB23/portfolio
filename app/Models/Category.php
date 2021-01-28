<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['title'];

    public function projects() {
        return $this->belongsToMany(Project::class, 'project_category');
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = Str::title($value);
    }
}
