@extends('layouts.app')

@section('content')

<div class="container row" style="margin-bottom: 96px;">

@foreach($movies as $movie)

                    <div class="flex-item movieCard" align="center" style="background-color: #D3D3D3">
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="images/movie_{{$movie['id']}}.jpg" alt="Card image cap">

                            </div>

                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title"><a>{{ $movie['title'] }}</a></h5>
                                <!-- Length & Genre -->
                                <div>
                                    <h6>
                                        <i>{{ $movie['length'] }} min</i>
                                        <strong> &nbsp; | &nbsp; </strong>
                                        <i>{{ $movie['genre']['name'] }}</i>
                                    </h6>
                                </div>

                                <!-- Button -->
                                <a href="{{ route('rent.create', $movie['id']) }}" class="btn btn-primary" style="margin: 5px;">Select</a>
                            </div>
                        </div>
                    </div>

@endforeach
</div>
@endsection
