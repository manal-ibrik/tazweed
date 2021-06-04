<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $fields = array(
                'contact_us_phone' => 'text',
                'contact_us_fax' => 'text',
                'contact_us_email' => 'text',
                'contact_us_title' => 'text',
                'contact_us_address' => 'longText',
                'contact_us_map' => 'longText'
            );
            foreach ($fields as $field => $type) {
                $table->$type($field)->nullable();
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contact_us');
    }

}
