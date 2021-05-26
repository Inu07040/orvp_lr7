<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Togepi',
            'description' => 'she protect u (∩•̀ω•́)⊃-*⋆',
            'photo' => 'https://fast-anime.ru/shop/upload/244654.JPG',
            'price' => 599.00
        ]);
        \DB::table('products')->insert([
            'name' => 'Cubone',
            'description' => 'he so sad, but love u ｡･ﾟ(ﾟ><ﾟ)ﾟ･｡',
            'photo' => 'https://super01.ru/pictures/product/big/72147_big.png',
            'price' => 959.00
        ]);
        \DB::table('products')->insert([
            'name' => 'Shroomish',
            'description' => 'he is si dangerus, but so cute (◡‿◡✿)',
            'photo' => 'https://i.ebayimg.com/images/g/SUAAAOSweR1ebiBa/s-l300.jpg',
            'price' => 159.00
        ]);
        \DB::table('products')->insert([
            'name' => 'Shaymin',
            'description' => '"sheym sheym" - she said "u r cute" (❁´◡`❁)',
            'photo' => 'https://ae01.alicdn.com/kf/H22ff4cb2a6364fb68b3f03c92ebeea29w.jpg',
            'price' => 569.00
        ]);
        \DB::table('products')->insert([
            'name' => 'Dragonair',
            'description' => 'she s wet, but love so much ٩(^ᴗ^)۶',
            'photo' => 'https://www.pokemoncenter.com/products/images/P4829/701-03741/P4829_701-03741_01_full.jpg',
            'price' => 349.00
        ]);
    }
}
