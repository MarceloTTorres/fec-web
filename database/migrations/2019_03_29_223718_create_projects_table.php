<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('owner');
            $table->unsignedInteger('area');
            $table->string('title');
            $table->string('resume', 500);
            $table->string('keywords');
            $table->string('advisor')->nullable();
            $table->enum('ethics_committee', ['YES', 'NO', 'NOT APPLICABLE']);
            $table->enum('patent', ['YES', 'NO', 'NOT APPLICABLE']);
            $table->date('patent_date');
            $table->enum('sponsor', ['YES', 'NO']);
            $table->string('sponsor_description');
            $table->date('done');
            $table->string('photo');
            $table->string('video');
            $table->geometry('local');
            $table->integer('unit');
            $table->integer('room');
            $table->integer('likes');
            $table->decimal('average');
            
            $table->timestamps();
            $table->softdeletes();

            $table->foreign('area')->references('id')->on('knowledgeareas');
            $table->foreign('owner')->references('id')->on('users');


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
