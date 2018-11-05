@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Kiosk List</h2>
    <div class="pb-1 text-right">
      <a href="{{ route('addKiosk') }}" class="btn btn-small btn-success" style="margin: 25px;">Add Kiosk</a>
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
                <td>{{ $kiosk['location'] }}</td>
                <td>{{ $kiosk['address'] }}</td>
              <td><button class="alert-dark" style="margin:5px;">Update</button></td>
                    <td><button class="alert-danger" style="margin:5px;">Delete</button></td>

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
