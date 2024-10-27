<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\books;
class reviews extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'user_id',
        'book_id',
        'comment',
        'rating'
    ];
     protected $casts = [
        'rating' => 'integer'
     ];
     public function user()
     {
         return $this->belongsTo(User::class);
     }
     public function book()
     {
         return $this->belongsTo(books::class);
     }

     public function setRatingAttribute($value){
        if ($value < 0 || $value > 10){
            throw new \InvalidArgumentException('A nota deve ser entre 0 e 10.');
        }
        $this->attributes['rating'] = $value;
     }
}
