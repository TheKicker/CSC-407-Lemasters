
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Movie List</h1>
        <div class="pb-1 text-right">

          <a href="{{ route('addMovie') }}" class="btn btn-small btn-success">Add a Movie</a>


        </div>

        <table class="table">
          <thead>
          <tr>
            <th>ID</th>
              <th>Cover</th>
              <th>Title</th>
              <th>Length</th>
              <th>Genre ID</th>
              <th>Description</th>
              <th>Is Disc</th>
              <th>Is Blueray</th>
              <th>Functions</th>
          </tr>
          </thead>
          <tbody>
            @foreach($movies as $movie)

              <tr>
                <td>{{ $movie['id'] }}</td>
                  <td>{{ $movie['cover'] }}</td>
                  <td>{{ $movie['title'] }}</td>
                  <td>{{ $movie['length'] }}</td>
                  <td>{{ $movie['genreID'] }}</td>
                  <td>{{ $movie['description'] }}</td>
                  <td>{{ $movie['isDISC'] }}</td>
                  <td>{{ $movie['isBLURAY'] }}</td>
                  <td><button class="alert-dark" style="margin:5px;">Update</button><button class="alert-danger" style="margin:5px;">Delete</button></td>
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
