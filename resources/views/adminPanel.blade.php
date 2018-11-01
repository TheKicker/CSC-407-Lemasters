@extends('layouts.app')

@section('content')

    <div>
    <h2>Administrator Panel</h2>
        <hr>
    <p><strong> This is example text until we work on the page </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong> This is example text until we work on the page </strong> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row">
        <div class="card" style="width: 18rem; margin: 30px;">
            <img class="card-img-top" src="https://i2.wp.com/freepngimages.com/wp-content/uploads/2014/04/moviecamera_2.png?w=220" style="height:100%; width:100%;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Movie Management</h5>
                <p class="card-text">CRUD Functions for managing your library of movies. </p>
                <a href="{{ route('indexMovie') }}" class="btn btn-dark">List of Movies</a>
                <a href="{{ route('addMovie') }}" class="btn btn-success">Add a Movie</a>
                <a href="{{ route('status') }}" class="btn btn-primary">Update Movie</a>
                <a href="{{ route('status') }}" class="btn btn-danger">Delete a Movie</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 30px;">
            <img class="card-img-top" src="https://i1.wp.com/freepngimages.com/wp-content/uploads/2015/08/Apple-Mac-Computer-vintage.png?resize=624%2C500" style="height:58%; width:100%;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kiosk Management</h5>
                <p class="card-text">CRUD Functions for managing your library of Kiosk </p>
                <a href="{{ route('indexKiosk') }}" class="btn btn-dark">List of all Kiosks</a>
                <a href="{{ route('addKiosk') }}" class="btn btn-success">Add a Kiosk</a>
                <a href="{{ route('status') }}" class="btn btn-primary">Update a Kiosk</a>
                <a href="{{ route('status') }}" class="btn btn-danger">Delete a Kiosk</a>
            </div>
        </div>
    </div>
    </div>
@endsection