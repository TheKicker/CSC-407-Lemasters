@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kiosk List</h1>
    <div class="pb-1 text-right">
      <a href="#" class="btn btn-small btn-success">Add</a>
    </div>

    <table class="table">
      <thead>
      <tr>
        <th>ID</th>
        <th>Location</th>
        <th>Address</th>
      </tr>
      </thead>
      <tbody>
        @foreach($kiosks as $kiosk)

          <tr>
            <td>{{ $kiosk['id'] }}</td>
            <td>{{ $kiosk['location'] }}</td>
            <td>{{ $kiosk['address'] }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>


    <div align="right">
        <a href="{{ route('adminPanel') }}"> Back to Admin Panel </a>
    </div>

</div>
@endsection
