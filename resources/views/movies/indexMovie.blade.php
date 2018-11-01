@extends('layouts.app')

@section('content')
    <h1>Available Movies</h1>
    <div class="container">

        In a perfect world, this would dump the entire list of <strong>Available Movies</strong> into a neat pretty format...

        <div align="right">
            <a href="{{ route('addMovie') }}"> Back to Add Movie > </a>
        </div>

    </div>
@endsection