@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('addMovie')}}">
        <fieldset>
            @csrf
            <div class="card-body">
                <!-- Form Name -->
                <legend><h2>Add a Movie</h2></legend>

                <hr>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="title">Movie Title</label>
                    <div class="col-md-4">
                        <input id="title" name="title" type="text" placeholder="The Life of Cav" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="genreID">Genre ID</label>
                    <div class="col-md-4">

                        <input id="genreID" name="genreID" type="text" placeholder="03" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="length">Length </label>
                    <div class="col-md-4">
                        <input id="length" name="length" type="text" placeholder="120 min" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">Description</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="description" name="description">Once upon a time...</textarea>
                    </div>
                </div>

                <!-- Multiple Checkboxes -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="checkboxes">Availability </label>
                    <div class="col-md-4">
                        <div class="checkbox">
                            <label for="isDISC">
                                <input type="checkbox" name="checkboxes" id="isDISC" value="1">
                                DVD
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="isBLURAY">
                                <input type="checkbox" name="checkboxes" id="isBLURAY" value="1">
                                BluRay
                            </label>
                        </div>
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
            </div>
        </fieldset>
    </form>


@endsection