@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Add a Movie') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addMovie') }}">
                            @csrf



                            <div class="form-group row" style="margin:25px;">
                                <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-8">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="Shawshank Redemption" required autofocus>

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
                                    <input id="genreID" type="text" class="form-control{{ $errors->has('genreID') ? ' is-invalid' : '' }}" name="genreID" value="{{ old('genreID') }}" placeholder="01" required autofocus>

                                    @if ($errors->has('genreID'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genreID') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="length" class="col-md-2 col-form-label text-md-right">{{ __('Length (min)') }}</label>

                                <div class="col-md-3">
                                    <input id="length" type="text" class="form-control{{ $errors->has('length') ? ' is-invalid' : '' }}" name="length" value="{{ old('length') }}" placeholder="120" required autofocus>

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
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" placeholder="A great movie..." required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row" style="margin:25px;">
                                {{-- This is where the image upload will go --}}
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                {{-- This is where the isDISC & isBLURAY will go --}}
                            </div>

                            <div align="right" style="margin:25px;">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Add Movie') }}
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
