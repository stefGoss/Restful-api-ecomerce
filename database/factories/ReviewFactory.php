<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        
     

        'product_id'=>function(){
            return Product::all()->random();
        }  ,
        'review'=>$faker->paragraph,
        'customer'=>$faker->name,
        
        'star'=>$faker->numberBetween(0,5),
        

    ];
});
