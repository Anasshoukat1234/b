<?php

namespace App\Models;

use App\Models\Book;
use Database\Seeders\ProviderSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function books(){
        return $this->hasMany(Book::class);
    }

}
