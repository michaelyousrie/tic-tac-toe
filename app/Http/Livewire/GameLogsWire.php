<?php

namespace App\Http\Livewire;

use App\Models\GameLog;
use Livewire\Component;

class GameLogsWire extends Component
{
    public function delete(GameLog $log)
    {
        $log->delete();
    }

    public function render()
    {
        return view('livewire.game-logs-wire', ['logs' => GameLog::all()]);
    }
}
