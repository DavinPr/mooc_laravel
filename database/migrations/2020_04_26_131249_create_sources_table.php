<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id('id');
            $table->char('source_id', 10)->unique();
            $table->string('source_name');
            $table->string('source_profession');
            $table->string('source_quotes', 255);
            $table->string('source_instagram');
            $table->string('source_twitter');
            $table->string('source_youtube');
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
        Schema::dropIfExists('sources');
    }
}
