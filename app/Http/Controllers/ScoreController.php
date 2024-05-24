<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'game_id' => 'required|exists:games,id',
                'score' => 'required|integer',
            ]);

            $score = new Score();
            $score->user_id = $validatedData['user_id'];
            $score->game_id = $validatedData['game_id'];
            $score->score = $validatedData['score'];
            $score->save();

            return response()->json(['message' => 'Score saved successfully'], 200);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Failed to save score'], 500);
        }
    }
}
