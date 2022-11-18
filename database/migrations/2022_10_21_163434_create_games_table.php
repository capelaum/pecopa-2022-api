<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->uuid('id')
                ->primary()
                ->default(DB::raw('UUID()'));
            $table->string('group', 1)
                ->nullable();
            $table->string('round', 100);
            $table->dateTime('game_time');
            $table->string('away_team_name', 100);
            $table->string('away_team_slug', 3);
            $table->string('home_team_name', 100);
            $table->string('home_team_slug', 3);
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
        Schema::dropIfExists('games');
    }
};
