@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome back {{ Auth::user()-> firstName }}, you are logged in!
                    <br>
                        <div align="right">
                            <a href="{{ route('welcome') }}"> Return to Homepage > </a>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
