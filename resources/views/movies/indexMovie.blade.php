
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Movie List</h1>
        <div class="pb-1 text-right">
<<<<<<< HEAD
          <a href="{{ route('addMovie') }}" class="btn btn-small btn-success">Add</a>
=======
          <a href="{{route('addMovie')}}" class="btn btn-small btn-success">Add</a>
>>>>>>> cf3d5ae7ad3b02fb6f3de51051bb0ce5be49f8a5
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
