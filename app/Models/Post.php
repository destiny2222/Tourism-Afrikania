<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public $fillable = [ 
        'image',
        'title',
        'description',
        'slug',
        'tag_id',
        'category_id'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }


    public function getSlugAttribute(){
        return Str::slug($this->title);
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tag(){
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
