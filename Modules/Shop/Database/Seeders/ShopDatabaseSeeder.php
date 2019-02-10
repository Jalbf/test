<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Shop\Entities\Shop;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class ShopDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $xml = simplexml_load_file('./public/shops.xml');
        $json = json_encode($xml);
        $arr = json_decode($json);
        foreach($arr->shop as $element){
            $shop_ins = (array)$element;
            Shop::create($shop_ins);
        }
    }
}
