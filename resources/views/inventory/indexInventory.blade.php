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
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


        <div align="right">
            <hr>
            <a href="{{ route('adminPanel') }}"> Back to Admin Panel </a>
        </div>

    </div>
@endsection
