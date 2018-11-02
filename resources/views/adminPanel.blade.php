@extends('layouts.app')

@section('content')

    <div>
    <h2>Administrator Dashboard</h2>
        <hr>
    <p><strong> This is example text, </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong> This is example text until we work on the page </strong> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="container row">

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                Movie Management
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="movies" class="#">List of Movies</a></li>
                <li class="list-group-item"><a href="{{route('addMovie')}}" class="#">Add a Movie</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Update Movie</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Remove a Movie</a></li>
            </ul>
        </div>

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                Kiosk Management
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="kiosks" class="#">List of Kiosks</a></li>
                <li class="list-group-item"><a href="{{ route('addKiosk') }}" class="#">Add a Kiosk</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Update Kiosk</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Remove a Kiosk</a></li>
            </ul>
        </div>

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                Inventory Management
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('indexKiosk') }}" class="#">List of Inventory</a></li>
                <li class="list-group-item"><a href="{{ route('addKiosk') }}" class="#">Add Inventory</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Update Inventory</a></li>
                <li class="list-group-item"><a href="{{ route('status') }}" class="#">Remove Inventory</a></li>
            </ul>
        </div>
    </div>
    </div>
@endsection