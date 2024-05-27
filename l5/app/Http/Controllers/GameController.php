<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the games.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchGames()
    {
        $games = Game::all();
        return response()->json($games);
    }
}
