@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row">
            <h2> <strong>{{ Auth::user()-> firstName }} {{ Auth::user()-> middleName }} {{ Auth::user()-> lastName }} </strong></h2>
        </div>
    
        <hr>

        <div>
            <div>
                <h4><strong>Email Address:</strong></h4>
                <h3 id="indentHard">{{ Auth::user()-> email }}</h3>
            </div>
            <div>
                <h4><strong>Cell Number:</strong></h4>
                <h3 id="indentHard"> {{ Auth::user()-> cellNumber }}</h3>
            </div>
            <div>
                <h4><strong>Street:</strong></h4>
                <h3 id="indentHard"> {{ Auth::user()-> street }}</h3>
            </div>
            <div>
                <h4><strong>City</strong></h4>
                <h3 id="indentHard"> {{ Auth::user()-> city }}</h3>
            </div>
            <div>
                <h4><strong>State & Zip:</strong></h4>
                <h3 id="indentHard"> {{ Auth::user()-> state }}, {{ Auth::user()-> zip }}</h3>
            </div>
        </div>
</div>

@endsection