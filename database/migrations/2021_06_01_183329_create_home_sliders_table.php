<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $fields = array(
                'slider_title' => 'text',
                'slider_image' => 'text'
            );
            foreach($fields as $field => $type){
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
        Schema::dropIfExists('home_sliders');
    }

}
