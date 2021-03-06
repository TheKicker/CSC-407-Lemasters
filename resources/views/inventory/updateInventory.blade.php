@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 96px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Update Inventory') }}</div>

                    {{-- action is pointed to the named route people.store which translates to a POST to /people --}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventory.update', $inventory['id']) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row" style="margin:25px;">
                                <label for="location" class="col-md-2 col-form-label text-md-right">Movie ID</label>
                                <div class="col-md-8">
                                    {{--
                                        The old('firstname') will holld the value of the field to populate the form if there is an error and
                                        you need to fix an error before resubmitting
                                    --}}
                                    <input id="movieID" name="movieID" type="text" value="{{ $inventory['movie']['title'] }}" class="form-control here @if ($errors->has('movieID')) is-invalid @endif">
                                    @if ($errors->has('movieID'))
                                        <div>
                                            <small id="movieID" class="text-danger">{{ $errors->first('movieID') }}</small>  </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                <label for="dvdInventory" class="col-md-2 col-form-label text-md-right">Add to DVD</label>
                                <div class="col-8">
                                    <input id="dvdInventory" name="dvdInventory" value="{{ $inventory['dvdInventory'] }}" type="text" class="form-control here @if ($errors->has('dvdInventory')) is-invalid @endif">
                                    @if ($errors->has('dvdInventory'))
                                        <div>
                                            <small id="dvdInventory" class="text-danger">{{ $errors->first('dvdInventory') }}</small>  </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" style="margin:25px;">
                                <label for="blurayInventory" class="col-md-2 col-form-label text-md-right">Add to BluRay</label>
                                <div class="col-8">
                                    <input id="blurayInventory" name="blurayInventory" value="{{ $inventory['blurayInventory'] }}" type="text" class="form-control here @if ($errors->has('blurayInventory')) is-invalid @endif">
                                    @if ($errors->has('blurayInventory'))
                                        <div>
                                            <small id="blurayInventory" class="text-danger">{{ $errors->first('blurayInventory') }}</small>  </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" align="right">
                                <div class="col-md-6 offset-md-4">
                                    <button name="submit" type="submit" class="btn btn-primary">{{__('Update Inventory')}}</button>
                                    <a href="{{route('inventory.index')}}" id="inventoryCancelButton" name="inventoryCancelButton" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
@endsection
