<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;


class ServiceSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $services = array(
            ['services_title' => 'Support 24/7',
                'services_description' => "We guarantee high reachability to our service department through complaint handling call centers operating 24 x 7. Highly efficient complaint management is ensured, with the use of Oracle ERP system supported by state-of-the art IT infrastructure. Each complaint received is logged into the ERP system and customer is given a unique complaint ID number for effective operational traceability."
            ],
            ['services_title' => 'After Sales Services',
            'services_description'=>"It is made sure by Tazweed that each complaint is attended within 6 hours through complaint categorization and effective workforce allocation.The quality of Aftersales service provided is ensured through product specific service skill training to technicians. Comprehensive trainings are provided to technicians to efficiently deal with challenging service requirements of HVAC industry."
            ],
            ['services_title' => 'Annual Maintenance Services',
            'services_description'=>"Setting up the standards for HVAC is not an easy feat to do, especially in one of the most competitive markets of the world; UAE; that is both growing and wide-ranging at the same speed. We at Tazweed have managed to become the benchmark in this domain, and establish an impeccable reputation for our work and standards that are global-worthy, and not only regional"
            ]
        );
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
