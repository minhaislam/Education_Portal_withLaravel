<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('email', 150)->nullable();
            $table->integer('phone')->nullable();
            $table->string('address', 255)->nullable();
             $table->string('department', 255)->nullable();
             $table->double('cgpa', 4, 2)->nullable();
             $table->string('passing_year', 255)->nullable();
               $table->string('eduction', 255)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
             $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profile');
    }
}
