@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Add a Kiosk') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addKiosk') }}">
                            @csrf



                            <div class="form-group row" style="margin:25px;">
                                <label for="location" class="col-md-3 col-form-label text-md-right">{{ __('Location Name') }}</label>

                                <div class="col-md-7">
                                    <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" placeholder="Geneva College Brig Kiosk #2" required autofocus>

                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-7">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="3200 College Avenue, Beaver Falls, PA 15010" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div align="right" style="margin:25px;">
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Add Kiosk') }}
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
