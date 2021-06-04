<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\HomeSlider;
class HomeSliderSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sliders = array(
        ['slider_image' => 'assets/images/home-banner-1.png'],
        ['slider_image' => 'assets/images/home-banner-2.png'],
        ['slider_image' => 'assets/images/home-banner-3.png'],
        ['slider_image' => 'assets/images/home-banner-4.png'],
        );
        foreach($sliders as $slider){
            
            HomeSlider::create($slider);
        }
    }

}
