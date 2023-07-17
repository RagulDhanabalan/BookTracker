<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takeout extends Model
{
    use HasFactory;
    protected $takeout = [
        'start_date' => 'datetime:Y-m-d',
        'end_date' => 'datetime:Y-m-d',
      ];
    protected $guarded = [];

    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function books(){
        return $this->hasMany(Book::class);
    }

    public function reader(){
        return $this->belongsTo(Reader::class);
    }

}
