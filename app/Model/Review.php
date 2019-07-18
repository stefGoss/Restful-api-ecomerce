<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'product_id', 'review','customer','star'
    ];

}

