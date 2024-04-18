<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'category_id','author_id', 'content', 'rating',  'user_id'];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function reviews(){
        return $this->belongsTo(Review::class);
    }
}
