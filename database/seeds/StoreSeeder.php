<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\models\Store::all();

        foreach($stores as $store){
             $store->products()->save(factory(\App\models\Product::class)->make());

        }
    }
}
