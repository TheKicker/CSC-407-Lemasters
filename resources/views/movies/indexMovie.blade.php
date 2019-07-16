
@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 96px;">
        <h2>Movie List</h2>
        <div class="pb-1 text-right">

          <a href="{{ route('movie.create') }}" class="btn btn-small btn-success" style="margin:30px;">Add a Movie</a>

        </div>

        <table class="table">
          <thead>
          <tr>
            <th>ID</th>
              <th>Title</th>
              <th>Cover</th>
              <th>Length</th>
              <th>GenreID</th>
              <th>Description</th>
              <th>DVD</th>
              <th>BluRay</th>
              <th></th>
              <th></th>
          </tr>
          </thead>
          <tbody>


            @foreach($movies as $movie)

              <tr>
                <td>{{ $movie['id'] }}</td>
                  <td style="text-shadow: 1px 1px yellow"><i>{{ $movie['title'] }}</i></td>
                  <td><a href="images/movie_{{$movie['id']}}.jpg" target="new"><img class="img-thumbnail" src="images/movie_{{$movie['id']}}.jpg" width="600" height="900"></a></td>
                  <td>{{ $movie['length'] }}</td>
                  <td>{{ $movie['genreID'] }}</td>
                  <td>{{ $movie['description'] }}</td>
                  <td>{{ $movie['isDISC'] }}</td>
                  <td>{{ $movie['isBLURAY'] }}</td>
                  <td>
                      <button class="btn-outline-primary btn-sm" style="margin:5px;"><a href="{{ route('movie.edit', $movie['id']) }}">Update</a></button>
                  </td>
                  <td>
                      <form method="POST" action="{{route('movie.destroy' , $movie['id'])}}">
                          @method('DELETE')
                          @csrf
                          <fieldset>
                                <button class="btn-danger btn-sm" style="margin:5px;" onclick = "myFunction()">Delete</button>
                                      <script>
                                          function myFunction() {
                                              alert("Successfully Deleted.");
                                          }
                                      </script>
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
