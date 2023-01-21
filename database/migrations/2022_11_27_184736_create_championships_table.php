<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('team_count');
            $table->integer('group_count');
            $table->string('play_system');
            $table->string('sharing_type');
            $table->string('lot_type');
            $table->string('region');
            $table->string('sharing_price');
            $table->string('match_price');
            $table->string('match_count');
            $table->date('start_date');
            $table->string('other_services');
            $table->text('condition');
            $table->string('awards');
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
        Schema::dropIfExists('championships');
    }
}
