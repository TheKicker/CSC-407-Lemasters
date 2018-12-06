@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 120px;">

        <div>
            <div class="text-left">
                <h2></h2>
            </div>
        </div>

    <div class="row">
        <div class="profileBox" align="center">
            <img src="http://drhrlaw.com/wp-content/uploads/2015/02/profile-placeholder.jpg">
        </div>
        <div class="profileBox">
            <div style="margin:15px;">
                <h2 id="indentHard" style="text-shadow: 1px 1px yellow"><strong><i>{{ Auth::user()-> firstName }} {{ Auth::user()-> middleName }} {{ Auth::user()-> lastName }} </i></strong></h2>
            </div>
            <hr>
            <div style="margin:15px;">
                <h6><strong>Email Address:</strong></h6>
                <h4 id="indentHard">{{ Auth::user()-> email }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>Cell Number:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> cellNumber }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>Street:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> street }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>City</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> city }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>State & Zip:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> state }}, {{ Auth::user()-> zip }}</h4>
            </div>
        </div>
    </div>

    <div class="profileBlock">
        <h3 style="text-shadow: 1px 1px yellow"><strong><i>Rental History:</i></strong></h3>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Movie</th>
                        <th>Kiosk</th>
                        <th>Rental Date</th>
                        <th>Review Option </th>
                        <th>Return Option </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rentals as $rental)
                        <td> {{$rental['movie']['title']}} </td>
                        <td> {{$rental['kiosk']['location']}} </td>
                        <td> {{$rental['rentalDate']}} </td>
                        <td> <a href="{{route('reviews.create')}}" class="btn btn-success">Review</a></td>
                        <td>
                            <form action="{{route('rent.update', $rental['id'])}}" method="POST">
                                @csrf
                                <input name="_method" type = "hidden" value="PUT">
                                <input type = "hidden" name = "id" value="{{$rental['id']}}">
                                <button type="submit" class="btn btn-primary" onclick="returnFunction()">Return</button>
                                <script>
                                    function returnFunction() {
                                        alert("Successfully Returned.  Return to the library to browse new movies!");
                                    }
                                </script>

                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
    </div>

    <div class="profileBlock">
        <h3 style="text-shadow: 1px 1px yellow"><strong><i>Review History:</i></strong></h3>
            <table class="table">
                <thead>
                <tr>
                    <th>Movie</th>
                    <th>Kiosk</th>
                    <th>Rental Date</th>
                    <th>Review</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rentals as $rental)
                    <td> {{$rental['movie']['title']}} </td>
                    <td> {{$rental['kiosk']['location']}} </td>
                    <td> {{$rental['rentalDate']}} </td>
                    {{--<td> {{$rental['review']}} </td>--}}
                        <td> This is my great review about how great this stupid movie was. I found this movie to be just fantastic to the point where I could not leave my seat -- covered in cheese sauce and coca cola I have never been better.</td>
                </tbody>
                @endforeach
            </table>
    </div>

</div>

@endsection