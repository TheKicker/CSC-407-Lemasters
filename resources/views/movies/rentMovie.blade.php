
@extends('layouts.app')

@section('content')

    <div class="container">

        <h2> Congratulations!</h2>
        <div align="center" style="background-color: white; border-style: solid; border-color: black">

            <h4 style="margin: 25px;">Your movie selection of $movie['id'] confirmed! Please return within 72 hours from now. </h4>

            <img src="https://media.giphy.com/media/8GY3UiUjwKwhO/source.gif" alt="Success!!" style="height: 60%; width: 50%;">

            <h4 style="margin: 25px;">
                <hr>
            <a href="{{route('library')}}">Back to Library</a>
            </h4>
        </div>
    </div>

@endsection
