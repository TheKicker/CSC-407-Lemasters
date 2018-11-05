@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Inventory List</h2>
        <div class="pb-1 text-right">
            <a href="{{ route('addInventory') }}" class="btn btn-small btn-success" style="margin: 25px;">Add Inventory</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>MovieID</th>
                <th>DVD Inventory</th>
                <th>BluRay Inventory</th>
                <th>Created At: </th>
                <th>Functions</th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach($discs as $disc)--}}

                {{--<tr>--}}
                    {{--<td>{{ $disc['id'] }}</td>--}}
                    {{--<td>{{ $disc['movieID'] }}</td>--}}
                    {{--<td>{{ $disc['dvdInventory'] }}</td>--}}
                    {{--<td>{{ $disc['blurayInventory'] }}</td>--}}
                    {{--<td>{{ $disc['created_at'] }}</td>--}}
                    {{--<td><button class="alert-dark" style="margin:5px;">Update</button><button class="alert-danger" style="margin:5px;">Delete</button></td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>


        <div align="right">
            <hr>
            <a href="{{ route('adminPanel') }}"> Back to Admin Panel </a>
        </div>

    </div>
@endsection
