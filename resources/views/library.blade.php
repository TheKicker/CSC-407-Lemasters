@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 96px;">
    <h2> Explore Whole New Worlds on DVD or BluRay</h2>
    <hr>
    <p><strong> These are the current products within our library. Find something you like! </strong></p>
    <div>

        {{--begin the at for each statement--}}

<div class="grid-container" style="display: grid; grid-template-columns: auto auto auto auto; padding: 10px;">
                <!-- individual movie card -->

                    <div class="grid-item movieCard">
                            <div class="card" align="center">
                                <!-- Card image -->
                                <div class="view overlay">
                                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/1/10/The_Chronicles_of_Narnia_-_The_Lion%2C_the_Witch_and_the_Wardrobe.jpg" alt="Card image cap">
                                    <a href="#">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title"><a>Title</a></h4>
                                    <!-- Length & Genre -->
                                    <div>
                                        <h6>
                                        <i>Length</i>
                                        <strong> &nbsp; | &nbsp; </strong>
                                        <i>Action</i>
                                        </h6>
                                    </div>

                                    <!-- Button -->
                                    <!-- <a href="#" class="btn btn-primary" style="margin: 5px;">Add to Cart</a> -->
                                </div>
                            </div>
                    </div>
                    <!-- End Card -->

</div>


            {{--the at end for each would go here--}}
    </div>

</div>
@endsection
