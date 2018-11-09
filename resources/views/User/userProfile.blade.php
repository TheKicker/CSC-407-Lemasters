@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row">
            <h2> <strong>{{ Auth::user()-> firstName }} {{ Auth::user()-> middleName }} {{ Auth::user()-> lastName }} </strong></h2>
        </div>

        <hr>
    <div class="row">
        <div class="profileBox" align="center">
            <img src="http://drhrlaw.com/wp-content/uploads/2015/02/profile-placeholder.jpg">
        </div>
        <div class="profileBox">
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

</div>

@endsection