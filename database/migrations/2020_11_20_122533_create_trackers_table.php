<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->integer('student_id');
            $table->integer('gareeba_from_hisbu');
            $table->integer('gareeba_from_rubu');
            $table->integer('gareeba_from_page');
            $table->string('gareeba_from_ayah');
            $table->integer('gareeba_to_hisbu');
            $table->integer('gareeba_to_rubu');
            $table->integer('gareeba_to_page');
            $table->string('gareeba_to_ayah');
            $table->integer('baeedha_from_hisbu');
            $table->integer('baeedha_from_rubu');
            $table->integer('baeedha_to_hisbu');
            $table->integer('baeedha_to_rubu');
            $table->integer('furusat');
            $table->integer('jadheedh_from_hisbu');
            $table->integer('jadheedh_from_rubu');
            $table->integer('jadheedh_from_page');
            $table->string('jadheedh_from_ayah');
            $table->integer('jadheedh_to_hisbu');
            $table->integer('jadheedh_to_rubu');
            $table->integer('jadheedh_to_page');
            $table->string('jadheedh_to_ayah');
            $table->date('date');

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
        Schema::dropIfExists('trackers');
    }
}
