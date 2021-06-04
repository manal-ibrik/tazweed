<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
        $categories =  ["Samsung","Thermic","Samsung"];
        
         
        foreach ($categories as $c) {
            Categories::create(['name'=>$c]);
        }
    }
}
