@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Add a New Kiosk</h1>
  <hr>
    <div class="col-7 offset-1">
    </div>
    {{-- action is pointed to the named route people.store which translates to a POST to /people --}}
    <form method="POST" action="{{ route('kiosks.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="location" class="col-2 offset-1 col-form-label text-right">Location</label>
            <div class="col-5">
                {{--
                    The old('firstname') will holld the value of the field to populate the form if there is an error and
                    you need to fix an error before resubmitting
                --}}
                <input id="location" name="location" type="text" value="{{ old('location') }}" class="form-control here @if ($errors->has('location')) is-invalid @endif">
                @if ($errors->has('location'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('location') }}</small>  </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-2 offset-1 col-form-label text-right">Address</label>
            <div class="col-5">
                <input id="address" name="address" value="{{ old('address') }}" type="text" class="form-control here @if ($errors->has('address')) is-invalid @endif">
                @if ($errors->has('address'))
                    <div>
                        <small id="passwordHelp" class="text-danger">{{ $errors->first('middlename') }}</small>  </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
    <div class="offset-3 col-5">
        <button name="submit" type="submit" class="btn btn-primary">Add Kiosk</button>
    </div>
</div>
    </form>
</div>
@endsection
