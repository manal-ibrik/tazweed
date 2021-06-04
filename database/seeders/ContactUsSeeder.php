<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactUsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $contact_us = array(
            [
                "contact_us_phone" =>"+971 4 345 3333",
                "contact_us_fax" =>"+971 4 345 3323",
                "contact_us_email" =>"info@tazweed-hvac.com",
                "contact_us_title" =>"TAZWEED GENERAL TRADING L.L.C",
                "contact_us_address" => "MAG Warehouses,</br> Unit 2, Al Quoz Industrial 2</br> P.O.Box 939100 Dubai, UAE",
                "contact_us_map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.8360736843783!2d55.25683671448322!3d25.1412323401395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f690ff86c3e2b%3A0xc57f3316fc6fc439!2sMAG%20Warehouses!5e0!3m2!1sen!2sin!4v1620383057820!5m2!1sen!2sin"
            ]
        );
        foreach ($contact_us as $new) {
            ContactUs::create($new);
        }
    }

}
