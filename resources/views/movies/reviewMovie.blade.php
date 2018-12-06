@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 96px;">
    <h2 style="text-shadow: 1px 1px yellow">New Review</h2>
        <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data">
            @csrf

            <fieldset>
                {{--@foreach($review as $reviews)--}}
                    {{--<td> {{$reviews['movie']['title']}} </td>--}}
                {{--@endforeach--}}
                <h2 align="center" style="margin: 25px 0 0 0; padding-top: 25px;">{{$movie['title']}}</h2>

                <div class="form-group">
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="textarea">Review a Movie</textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    {{--<table class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Movie</th>--}}
            {{--<th>Review</th>--}}
            {{--<th>Action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($review as $review)--}}
            {{--<td> {{$review['movie']['title']}} </td>--}}
            {{--<td> This is my great review about how great this stupid movie was. I found this movie to be just fantastic to the point where I could not leave my seat -- covered in cheese sauce and coca cola I have never been better.</td>--}}
            {{--<td>--}}
                {{--<form action="{{route('review.show', $review['id'])}}" method="POST">--}}
                    {{--@csrf--}}
                    {{--<input name="_method" type = "hidden" value="PUT">--}}
                    {{--<input type = "hidden" name = "id" value="{{$review['id']}}">--}}
                    {{--<button type="submit" class="btn btn-danger">Delete Review</button>--}}

                {{--</form>--}}
            {{--</td>--}}
        {{--</tbody>--}}
        {{--@endforeach--}}
    </table>
</div>
    @endsection