<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solution;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solutions = array(
            ['solutions_title' => 'Air Conditioning',
                'solutions_description' => "Making a Better World
Through innovative, reliable products and serviceds talented people a responsible approach to business and global citizenship and collaboration with out partners and cuostmers, Samsung is taking the world in imaginative new directions."
            ],
            ['solutions_title' => 'After Sales Services',
            'solutions_description'=>"Thermic LTD was founded in 1977 and since then continuosuly manufactures solar and electric water heaters. THERMIC productrs are being sold throughout Greece, in many European countries, in the Middle East, in North and Central Africa, in South America. Thermic is proud for manufacturing 100% eco-friendly products, 100% recyclable, with a long service life. THERMIC products are energy-saving, non-polluting using the free inexhaustible energy source: our SUN"
            ],
            ['solutions_title' => 'Annual Maintenance Services',
            'solutions_description'=>"Setting up the standards for HVAC is not an easy feat to do, especially in one of the most competitive markets of the world; UAE; that is both growing and wide-ranging at the same speed. We at Tazweed have managed to become the benchmark in this domain, and establish an impeccable reputation for our work and standards that are global-worthy, and not only regional"
            ],
            [
                'solutions_title'=>'Engineering & Design',
                'solutions_description'=>'Setting up the standards for HVAC is not an easy feat to do, especially in one of the most competitive markets of the world; UAE; that is both growing and wide-ranging at the same speed. We at Tazweed have managed to become the benchmark in this domain, and establish an impeccable reputation for our work and standards that are global-worthy, and not only regional'
            ]
        );
        foreach ($solutions as $solution) {
            Solution::create($solution);
        }
    }
}
