@extends('layouts.app')

@section('content')

    <div>

    <h2>Administrator Dashboard</h2>
        <hr>
        <p><strong> Welcome to the Administrator Dashboard. </strong>  Here you can use a variety of tools and options to manage your Yellow Bucket System &copy;.  Deus meus, recorder in gratiarum actione tibi et confitear misericordias tuas super me. perfundantur ossa mea dilectione tua et dicant: 'domine, quis similis tibi?' dirupisti vincula mea: sacrificem tibi sacrificium laudis. quomodo dirupisti ea narrabo, et dicent omnes qui adorant te, cum audiunt haec, 'benedictus dominus in caelo et in terra; magnum et mirabile nomen eius.  </p>

    <div class="container row">

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                <strong>Movie Management</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{route('movie.index')}}" class="#">List of Movies</a></li>
                <li class="list-group-item"><a href="{{route('movie.create')}}" class="#">Add a Movie</a></li>
                <li class="list-group-item" style="height:48px;"><a href="{{ route('status') }}" class="#"></a></li>

            </ul>
        </div>

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                <strong>Kiosk Management</strong>
            </div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item"><a href="{{route('kiosk.index') }}" class="#">List of Kiosks</a></li>
                <li class="list-group-item"><a href="{{ route('kiosk.create') }}" class="#">Add a Kiosk</a></li>
                <li class="list-group-item" style="height:48px;"><a href="{{ route('status') }}" class="#"></a></li>

            </ul>
        </div>

        <div class="card" style="width: 18rem; margin: 35px;">
            <div class="card-header">
                <strong>Inventory Management</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('inventory.index') }}" class="#">List of Inventory</a></li>
                <li class="list-group-item"><a href="{{ route('inventory.create') }}" class="#">Add Inventory</a></li>
                <li class="list-group-item" style="height:48px;"><a href="{{ route('status') }}" class="#"></a></li>

            </ul>
        </div>
    </div>
    </div>
@endsection
