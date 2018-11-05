
@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Movie List</h2>
        <div class="pb-1 text-right">

          <a href="{{ route('movie.create') }}" class="btn btn-small btn-success">Add a Movie</a>

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
              <th></th>
              <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($movies as $movies)

              <tr>
                <td>{{ $movies['id'] }}</td>
                  <td>{{ $movies['cover'] }}</td>
                  <td>{{ $movies['title'] }}</td>
                  <td>{{ $movies['length'] }}</td>
                  <td>{{ $movies['genreID'] }}</td>
                  <td>{{ $movies['description'] }}</td>
                  <td>{{ $movies['isDISC'] }}</td>
                  <td>{{ $movies['isBLURAY'] }}</td>
                  <td>
                      <button class="alert-dark" style="margin:5px;"><a href="{{ route('movie.edit', $movies['id']) }}">Update</a></button>
                  </td>
                  <td>
                      <button class="alert-danger" style="margin:5px;"><a href="{{route('movie.destroy', $movies['id'])}}">Delete</button>
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
