<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'price', 'stock','discount','detail'
    ];

public function reviews(){
return $this->hasMany(Review::class);
}
    


}
