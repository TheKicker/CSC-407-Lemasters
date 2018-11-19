
@extends('layouts.app')

@section('content')

    <div class="container">

        <h2> Congratulations!</h2>
        <hr>
        <div align="center">

            <h4 style="margin: 25px;">Your movie selection is confirmed! Please return within 72 hours from now. </h4>

            <img src="https://media.giphy.com/media/XreQmk7ETCak0/giphy.gif" alt="Success!!">

            <h4 style="margin: 25px;">
            <a href="{{route('library')}}">Back to Library</a>
            </h4>
        </div>
    </div>

@endsection
