<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filetitle');
            $table->string('file')->nullable();
            $table->string('fileurl')->nullable();
            $table->longtext('filedescription');
            $table->mediumtext('filesummary');
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
        Schema::dropIfExists('files');
    }
}
