<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function($table) {

            $table->increments('id', true);
            $table->string('surname', 60);
            $table->string('given_name', 60);
            $table->string('nationality', 60);
            $table->string('sex', 60);
            $table->date('date_of_birth', 60);
            $table->string('phone_number', 60);
            $table->string('district', 60);
            $table->string('county', 60);
            $table->string('subcounty', 60);
            $table->string('village', 120);
            $table->string('level_of_education', 60);
            $table->string('class', 60);
            $table->string("father_name", 60);
            $table->string("father_contact", 60);
            $table->string("mother_name", 60);
            $table->string("mother_contact", 60);
            $table->timestamps();
            $table->softDeletes();  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
