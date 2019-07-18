<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'price', 'stock','discount','detail'
    ];


    


}
