<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateGameLogRequest;
use App\Models\GameLog;

class GameLogsController extends Controller
{
    public function store(CreateGameLogRequest $request)
    {
        $winner = strtoupper($request->winner);

        if ($winner == 'D') {
            $winner = "Draw!";
        } else {
            $winner = "{$winner} won!";
        }

        GameLog::create([
            'winner'    => $winner
        ]);

        return [
            'success'   => true
        ];
    }

    public function index()
    {
        return view('game-logs');
    }
}
