@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 96px;">
        <h2>Inventory List</h2>
        <div class="pb-1 text-right">
            <a href="{{ route('inventory.create') }}" class="btn btn-small btn-success" style="margin: 25px;">Add Inventory</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>MovieID</th>
                <th>DVD Inventory</th>
                <th>BluRay Inventory</th>
                <th>Created At: </th>
                <th>Updated At: </th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($inventory as $inventory)
                    <tr>
                        <th>{{ $inventory['id'] }}</th>
                        <th style="text-shadow: 1px 1px yellow"><i>{{ $inventory['movie']['title']}}</i></th>
                        <th>{{ $inventory['dvdInventory'] }}</th>
                        <th>{{ $inventory['blurayInventory'] }}</th>
                        <th>{{ $inventory['created_at'] }}</th>

                        @if($inventory['updated_at'] == null)
                            <th>[ No Changes Made ] </th>
                        @else
                           {{--<th> [ Hey it works ]</th>--}}
                            <th>{{ $inventory['updated_at'] }}</th>
                        @endIf

                        <td>
                            <button class="btn-outline-primary btn-sm" style="margin:5px;"><a href="{{ route('inventory.edit', $inventory['id']) }}">Update</a></button>
                        </td>
                        <td>
                            <form method="POST" action="{{route('inventory.destroy' , $inventory['id'])}}">
                                @method('DELETE')
                                @csrf
                                <fieldset>
                                    <button class="btn-danger btn-sm" style="margin:5px;">Delete</button>
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>


        <div align="right">
            <hr>
            <a href="{{ route('adminPanel') }}"> Back to Admin Panel </a>
        </div>

    </div>
@endsection
