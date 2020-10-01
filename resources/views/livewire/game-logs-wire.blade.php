<div class="container">
    <a href="{{ route('game.index') }}" class="top-link">&larr; Back to game</a>
    @if ($logs->count())
        <h1>Game Logs</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Winner</th>
                    <th>Date/Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->winner }}</td>
                        <td>{{ $log->created_at->diffForHumans() }}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="delete({{ $log->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-center">No Logs yet. have you even played a game yo?</h1>
    @endif
</div>
