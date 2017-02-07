<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flag');
            $table->string('competition');
            $table->string('home_team');
            $table->string('away_team');
            $table->integer('bet_id')->unsigned()->index();
            $table->string('tip');
            $table->string('odd');
            $table->string('result');
            $table->date('date_time');
            $table->string('status');          
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
        Schema::dropIfExists('tips');
    }
}
