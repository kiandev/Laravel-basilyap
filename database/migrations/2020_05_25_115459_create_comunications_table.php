<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunications', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->text('call');
            $table->text('instagram');
            $table->text('telegram');
            $table->text('facebook');
            $table->text('gmail');
            $table->text('linkedin');
            $table->text('youtube');
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
        Schema::dropIfExists('comunications');
    }
}
