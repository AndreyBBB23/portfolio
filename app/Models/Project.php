<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = ['title', 'content', 'image'];

    public function categories() {
        return $this->belongsToMany(Category::class, 'project_category');
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = Str::title($value);
    }

    public function getClassCategory()
    {
        $classes = [];

        foreach ($this->categories()->get() as $category){
            $classes[] = 'cat-' . $category->id;
        }

        return implode(' ', $classes);
    }
}
