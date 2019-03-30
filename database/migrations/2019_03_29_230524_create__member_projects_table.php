<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('projects_id');
            $table->unsignedBigInteger('users_id');

            $table->timestamps();
            $table->softdeletes();

            $table->foreign('projects_id')->references('id')->on('projects');
            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_member_projects');
    }
}
