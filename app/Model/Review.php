<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    use Notifiable;

    protected $fillable = [
        'review','customer','star'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
        }

}





