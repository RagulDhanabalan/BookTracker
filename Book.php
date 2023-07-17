<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Takeout;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function takeout(){
        return $this->hasMany(Takeout::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
    public function books(){
        return $this->belongsTo(Book::class);
    }
    public function reader(){
        return $this->hasMany(Reader::class);
    }
}
