<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_bases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('unit_id');
            $table->string('name');
            $table->bigInteger('price');
            $table->text('image');
            $table->string('type');
            $table->string('region');
            $table->bigInteger('project_id');
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
        Schema::dropIfExists('unit_bases');
    }
}
