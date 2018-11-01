@extends('layouts.app')

@section('content')
    <div class="container">

        In a perfect world, this would dump the entire list of <strong>Available Kiosks</strong> into a neat pretty format...

        <div align="right">
            <a href="{{ route('addKiosk') }}"> Back to Add Kiosk > </a>
        </div>

    </div>
@endsection