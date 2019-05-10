<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgeareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();

        Schema::create('knowledgeareas', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('area');
            $table->integer('master_area', false, true)->nullable();
            $table->primary('id');
            $table->index("master_area");
            
            $table->foreign('master_area')->references('id')->on('knowledgeareas'); 

            $table->timestamps();
            $table->softdeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowledgeareas');
    }
}
