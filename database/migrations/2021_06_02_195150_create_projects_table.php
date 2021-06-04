<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
             $fields = array(
                'projects_title' => 'text',
                'projects_location' => 'text',
                'projects_date' => 'Date',
                'projects_size' => 'text',
                'projects_client' => 'text',
                'projects_consultant' => 'text',
                'projects_application' => 'text',
                'projects_image' => 'text',
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
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
