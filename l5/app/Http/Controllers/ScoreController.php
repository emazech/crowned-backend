<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'game_id' => 'required|exists:games,id',
            'score' => 'required|integer|min:0',
        ]);

        $score = Score::create($validatedData);

        return response()->json(['score' => $score], 201);
    }
}