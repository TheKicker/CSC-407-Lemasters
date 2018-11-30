
@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 96px;">

        <h2> Great choice {{ Auth::user()-> firstName }}! </h2>
        <div style="outline: 3px solid #3d4852;;">

            <h2 align="center" style="margin: 25px 0 0 0; padding-top: 25px;">{{$movie['title']}}</h2>

            <div class="row">

                <div class="col-md-4" style="margin: 48px;" align="center">
                    <img src="/images/movie_{{$movie['id']}}.jpg" style="box-shadow: 10px 10px 10px #3d4852">
                </div>

                <div class="col-md-4" style="margin: 48px;">
                    <h4>
                        <i>{{ $movie['length'] }} min</i>
                        <strong> &nbsp; | &nbsp; </strong>
                        <i>{{ $movie['genre']['name'] }}</i>
                    </h4>
                    <p>
                        {{$movie['description']}}
                    </p>
                    <div>
                        <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                            <fieldset>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="radios">Format</label>
                            <div class="col-md-4" style="padding-left: 35px;">
                                <div class="radio">
                                    <label for="radios-0">
                                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                        DVD
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radios-1">
                                        <input type="radio" name="radios" id="radios-1" value="2">
                                        BluRay
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="kioskSelect">Kiosk</label>
                            <div class="col-md-10" style="padding-left: 35px;">
                                <select id="kioskSelect" name="kioskSelect" class="form-control">

                                    @foreach($kiosks as $kiosk)
                                    <option value="{{$kiosk['id']}}">{{$kiosk['location']}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        </fieldset>
                        </form>
                    </div>
                </div>

            </div>
            <div align="center" style="padding: 48px;">
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-success">Submit</button>
                            <a href="{{route('library')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
