<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('instructor');
            $table->integer('number_of_lecture');
            $table->string('duration');
            $table->string('language');
            $table->integer('price');
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('video');
            $table->integer('medic_id'); 
            $table->enum('status', ['hold', 'approved'])->default('hold');
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
        Schema::dropIfExists('courses');
    }
}
