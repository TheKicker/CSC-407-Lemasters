@extends('layouts.app')

@section('content')

<div class="container row">

@foreach($movies as $movie)

                    <div class="flex-item movieCard" align="center">
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="../public/images/movie_{{$movie['id']}}.jpg" alt="Card image cap">

                            </div>
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title"><a>{{ $movie['title'] }}</a></h4>
                                <!-- Length & Genre -->
                                <div>
                                    <h6>
                                        <i>{{ $movie['length'] }} min</i>
                                        <strong> &nbsp; | &nbsp; </strong>
                                        <i>{{ $movie['genreID'] }}</i>
                                    </h6>
                                </div>

                                <!-- Button -->
                                <a href="{{ route('rent.create', $movie['title']) }}" class="btn btn-primary" style="margin: 5px;">Rent</a>
                            </div>
                        </div>
                    </div>


@endforeach
</div>
@endsection
