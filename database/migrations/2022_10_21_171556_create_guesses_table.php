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
    public function up(): void
    {
        Schema::create('guesses', function (Blueprint $table) {
            $table->foreignUuid('game_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignUuid('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table->primary(['game_id', 'user_id']);
            $table->integer('home_team_score');
            $table->integer('away_team_score');
            $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('guesses');
    }
};
