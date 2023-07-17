<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Takeout;
// use App\Models\Reader;



class Reader extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function takeouts(){
        return $this->hasMany(Takeout::class,'book_id','start_date');
    }
    // public function takeout(){
    //     return $this->hasOne((Takeout::class));
    // }
    public function reader(){
        return $this->belongsTo(Reader::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }


}
