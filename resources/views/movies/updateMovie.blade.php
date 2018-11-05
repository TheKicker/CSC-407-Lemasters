@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 96px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Update a Movie') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('movie.update', $movies['id']) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf



                            <div class="form-group row" style="margin:25px;">
                                <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-8">

                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="title" placeholder="Toy Story" required autofocus>


                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                <label for="genreID" class="col-md-2 col-form-label text-md-right">{{ __('Genre ID') }}</label>

                                <div class="col-md-3">
                                    <input id="genreID" type="text" class="form-control{{ $errors->has('genreID') ? ' is-invalid' : '' }}" name="genreID" value="{{ $movies('genreID') }}" placeholder="01" required autofocus>

                                    @if ($errors->has('genreID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genreID') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="length" class="col-md-2 col-form-label text-md-right">{{ __('Length (min)') }}</label>

                                <div class="col-md-3">
                                    <input id="length" type="text" class="form-control{{ $errors->has('length') ? ' is-invalid' : '' }}" name="length" value="{{ $movies('length') }}" placeholder="120" required autofocus>

                                    @if ($errors->has('length'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('length') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row" style="margin:25px;">
                                <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-8">
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $movies('description') }}" placeholder="A great movie..." required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            {{--<div class="form-group row" style="margin:25px;">--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label class="col-md-4 col-form-label text-md-right" for="image">Upload image</label>--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<input id="image" name="image" class="input-file" type="file">--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                                {{--<label class="col-md-2 col-form-label text-md-right" for="checkboxes">Format</label>--}}
                                {{--<div class="col-md-2">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label for="checkboxes-0">--}}
                                            {{--<input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">--}}
                                            {{--DVD--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label for="checkboxes-1">--}}
                                            {{--<input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">--}}
                                            {{--BluRay--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div align="right" style="margin:25px;">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Movie') }}
                                        </button>
                                        <a href="{{route('movie.index')}}" id="movieCancelButton" name="movieCancelButton" class="btn btn-danger">Cancel</a>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection