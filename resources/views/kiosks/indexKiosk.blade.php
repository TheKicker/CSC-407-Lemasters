@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 96px;">
    <h2>Kiosk List</h2>
    <div class="pb-1 text-right">
        <a href="{{ route('kiosk.create') }}" class="btn btn-small btn-success" style="margin: 25px;">Add Kiosk</a>
    </div>

    <table class="table">
      <thead>
      <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Address</th>
            <th></th>
            <th></th>
      </tr>
      </thead>
      <tbody>
        @foreach($kiosks as $kiosk)

          <tr>
                <td>{{ $kiosk['id'] }}</td>
              <td style="text-shadow: 1px 1px yellow"><i>{{ $kiosk['location'] }}</i></td>
                <td>{{ $kiosk['address'] }}</td>
              <td><button class="btn-outline-primary btn-sm" style="margin:5px;"><a href="{{ route('kiosk.edit', $kiosk['id']) }}">Update</a></button></td>
                    <td><form method="POST" action="{{route('kiosk.destroy' , $kiosk['id'])}}">
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
                        </form></td>

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
