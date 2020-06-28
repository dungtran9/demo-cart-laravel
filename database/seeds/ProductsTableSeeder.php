<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Iphone X';
        $product->decs = 'hang xach tay chinh hang';
        $product->slug = \Illuminate\Support\Str::slug('Iphone X');
        $product->price = '15000000';
        $product->image = 'storage/images/ipX.jpg';
        $product->content = 'Ip X la dien thoai moi ra mat';
        $product->total = '23';
        $product->save();
        $product = new \App\Product();
        $product->name = 'Iphone 11 pro max';
        $product->decs = 'la mot san pham moi cua apple';
        $product->slug = \Illuminate\Support\Str::slug('Iphone 11 pro max');
        $product->price = '22000000';
        $product->image = 'storage/images/ip11promax.jpg';
        $product->content = 'Ip 11 pro max la dien thoai moi ra mat nam 2020';
        $product->total = '45';
        $product->save();
        $product = new \App\Product();
        $product->name = 'Iphone 8 plus';
        $product->decs = 'dien thoai cam ung pin dung luong cao';
        $product->slug = \Illuminate\Support\Str::slug('Iphone 8 plus');
        $product->price = '9000000';
        $product->image = 'storage/images/ip8plus.jpg';
        $product->content = 'Ip 8 plus la dien thoai chong nuoc';
        $product->total = '50';
        $product->save();
    }
}
