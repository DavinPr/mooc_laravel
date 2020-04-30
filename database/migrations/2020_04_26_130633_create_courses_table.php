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
            $table->id('id');
            $table->char('course_id', 10)->unique();
            $table->string('course_title');
            $table->string('course_thumbnail');
            $table->string('course_explaination', 1000);
            $table->string('category_id');
            $table->integer('course_videos_count')->unsigned();
            $table->char('source_id', 10);
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
