<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYOLOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('YOLO', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('N.B')->nullable();
            $table->float('Height.')->nullable();
            $table->string('Cognomen')->nullable();
            $table->date('Bird day')->nullable();
            $table->text('Introduce yourself')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('YOLO');
    }
}
