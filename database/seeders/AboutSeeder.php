<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $abouts = array(
            ['abouts_title' => 'About us',
//                'abouts_image' => 'assets/images/about-banner.png',
                'abouts_description' => "Tazweed is the Arabic root word for the concept of “Providing”. And since 2010 we embarked on our journey with full commitment to this rich and essential role of providing and supplying the best and the most efficient solutions for Engineering, Manufacturing and Trading of construction services and equipment.            
We take it very seriously to live up to our name, and provide our customers with an outstanding range of HVAC products coupled with comprehensive MEP/HVAC solutions that would meet all contractor's needs and standards."],
            ['abouts_title' => 'Message From The Company',
                'abouts_description' =>"We take it very seriously to live up to our name, and provide our customers with an outstanding range of HVAC products coupled with comprehensive MEP/HVAC solutions that would meet all contractor's needs and standards."
            ],
            ['abouts_title' => 'Mission',
                'abouts_description' =>"Setting up the standards for HVAC is not an easy feat to do, especially in one of the most competitive markets of the world; UAE; that is both growing and wide-ranging at the same speed. We at Tazweed have managed to become the benchmark in this domain, and establish an impeccable reputation for our work and standards that are global-worthy, and not only regional"
                ],
            ['abouts_title' => 'Our Core Value',
                'abouts_description' =>"Setting up the standards for HVAC is not an easy feat to do, especially in one of the most competitive markets of the world; UAE; that is both growing and wide-ranging at the same speed. We at Tazweed have managed to become the benchmark in this domain, and establish an impeccable reputation for our work and standards that are global-worthy, and not only regional"],
            ['abouts_title'=>'Our Objectives',
            'abouts_description' => "People

Tazweed based in the heart of Dubai, steered by highly acclaimed team of technicians, engineers, sales and support staff is the great partner for any contractor aspiring to delivery top-notch HVAC systems at the most modern and advanced standards in the world. Tazweed is also sharp focused on investing in its human assets with continuous training and upgrading programs tailor made to increase their capabilities and scope of understanding to our domain.
Excellence

We also do not limit our excellence to delivery of the projects only. We also extend it to a responsive after-sales service that is backed up by enough spare parts storage to keep everything going without interruption or shipping wait-time for any of our client. Actually this is exactly why we are called Tazweed which means literally “providing”

Tazweed believes that all its stakeholders must be loyal to our core commitment, which is “Providing” the best services and solutions at the bets time and most effective costs. Even our sub-contractor and hand-picked among the best to ensure being loyal and honest to our core values"],
            ['abouts_title'=>'Organization Chart',
              'abouts_image' => "assets/images/organization-chart.jpg"  ]
            );
        foreach ($abouts as $about) {

            About::create($about);
        }
    }

}
