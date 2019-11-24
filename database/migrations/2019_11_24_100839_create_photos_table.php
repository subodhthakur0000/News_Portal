<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phototitle');
            $table->string('photo')->nullable();
            $table->string('photourl')->nullable();
            $table->longtext('photodescription');
            $table->mediumtext('photosummary');
            $table->string('status');
            $table->string('seotitle');
            $table->string('seokeyword');
            $table->longtext('seodescription');
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
        Schema::dropIfExists('photos');
    }
}
