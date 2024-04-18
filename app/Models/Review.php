<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'rating','user_id' ];
    public function books(){
        return $this->hasMany(Book::class);
    }
}
