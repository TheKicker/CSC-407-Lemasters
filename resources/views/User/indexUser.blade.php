@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 96px;">
        <h2>User List</h2>
        <div class="pb-1 text-right">
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number </th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $person)
                <tr>
                    <th>{{ $person['id'] }}</th>
                    <th>{{ $person['firstName'] }}</th>
                    <th>{{ $person['lastName'] }}</th>
                    <th>{{ $person['email'] }}</th>
                    <th>{{ $person['cellNumber'] }}</th>
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
