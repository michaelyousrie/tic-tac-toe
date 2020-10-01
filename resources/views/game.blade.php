@extends('layouts.app')
@section('content')
    <div class="board" id="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>

    @include('inc.win-screen')
    <a href="{{ route('game.logs') }}" class="top-link">View Logs 	&rarr;</a>
@endsection

@section('scripts')
    <script src="/js/game.js"></script>
@endsection
