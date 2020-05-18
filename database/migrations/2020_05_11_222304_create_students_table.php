<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
                 $table->bigIncrements('id');
               $table->string('sid')->unique();;
                $table->string('sname');
                 $table->string('sdepartment');
                     $table->string('scgpa');
                      $table->string('ssection');
                      
                        $table->string('credetcomplete');
                          $table->string('semail')->unique();
                             $table->timestamp('semail_verified_at')->nullable();
                                 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
