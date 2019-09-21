<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');

            $table->unsignedBigInteger('owner_category_id');
            $table->foreign('owner_category_id')->references('id')->on('owner_categories')->onDelete('cascade');


            $table->string('latitude');
            $table->string('longitude');

            $table->string('mobile');
            $table->string('tel');

            $table->string('email')->nullable();

            $table->text('address');

            $table->string('password');

            $table->string('logo_path')->nullable();

            $table->string('activation_status');

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
        Schema::dropIfExists('owners');
    }
}
