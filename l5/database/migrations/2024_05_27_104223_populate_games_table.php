<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('games')->insert([
            [
                'name' => 'Memory Card',
                'description' => 'Match pairs of cards as quickly as possible.'
            ],
            [
                'name' => 'Trivia Questions',
                'description' => 'Answer trivia questions to test your knowledge.'
            ],
            [
                'name' => 'Save the cheese',
                'description' => 'Guess the word to save the cheese.'
            ],
            [
                'name' => 'Coin collector',
                'description' => 'Collect as many coins as you can.'
            ],
            [
                'name' => 'Snake',
                'description' => 'Grow your snake by eating, but don\'t hit the walls or yourself.'
            ],
            [
                'name' => 'Chainsaw maze',
                'description' => 'Navigate through a dangerous maze with chainsaws.'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('games')->where('name', 'Memory Card')->delete();
        DB::table('games')->where('name', 'Trivia Questions')->delete();
        DB::table('games')->where('name', 'Save the cheese')->delete();
        DB::table('games')->where('name', 'Coin collector')->delete();
        DB::table('games')->where('name', 'Snake')->delete();
        DB::table('games')->where('name', 'Chainsaw maze')->delete();
    }
}
