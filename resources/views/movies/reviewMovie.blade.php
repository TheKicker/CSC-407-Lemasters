@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 96px;">
        <h2 style="text-shadow: 1px 1px yellow"><strong><i>New Review</i></strong></h2>
        <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data">
            @csrf

            <fieldset>

                <h2 align="center" style="margin: 25px 0 0 0; padding-top: 25px;">{{$movie['title']}}</h2>
                @foreach ($rentals as $rental)
                    @foreach($movies as $movie)
                        @if ($rental['movie_id']== $movie['id'])
                        <td style =""> {{$movie['title']}}</td>
                        @endif
                    @endforeach
                @endforeach
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

</div>
    @endsection