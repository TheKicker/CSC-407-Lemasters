@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('addKiosk')}}">
        <fieldset>
            @csrf
            <div class="card-body">

                <!-- Form Name -->
                <legend><h2>Add a Kiosk</h2></legend>

                <div align="right">
                    <a href="{{ route('indexKiosk') }}"> Current Kiosk Locations > </a>
                </div>

                <hr>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="location">Location Name</label>
                    <div class="col-md-4">
                        <input id="location" name="location" type="text" placeholder="Geneva College Kiosk #2" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="address">Address</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="button1id"></label>
                    <div class="col-md-8">
                        <button id="button1id" name="button1id" class="btn btn-success">Submit</button>
                        <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                    </div>
                </div>

        </fieldset>
    </form>

@endsection