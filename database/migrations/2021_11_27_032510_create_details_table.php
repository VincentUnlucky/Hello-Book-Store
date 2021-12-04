<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->length(20)->primary();
            $table->bigInteger('book_id')->unsigned()->length(20);
            $table->foreign('book_id')->references('id')->on('books');
            $table->string('author',255);
            $table->string('publisher',255);
            $table->integer('year')->length(11);
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
