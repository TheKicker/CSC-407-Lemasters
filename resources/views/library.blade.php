@extends('layouts.app')

@section('content')

<div class="container row">

@foreach($movies as $movie)

                    <div class="flex-item movieCard">
                        <div class="card" align="center">
                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/1/10/The_Chronicles_of_Narnia_-_The_Lion%2C_the_Witch_and_the_Wardrobe.jpg" alt="Card image cap">
                                <a href="#">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
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
