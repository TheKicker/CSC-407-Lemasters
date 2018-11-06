@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 96px;">
    <h2> Explore Whole New Worlds on DVD or BluRay</h2>
    <hr>
    <p><strong> These are the current products within our library. :) ENJOY YO   </strong></p>
    <div>

        {{--begin the at for each statement--}}

                <!-- individual movie card -->
                    <div style="width: 20%; height: 15%; box-shadow: 10px 10px 25px #787878;">
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
                                    <h4 class="card-title"><a>The Chronicles of Narnia : Part One</a></h4>
                                    <!-- Length & Genre -->
                                    <div>
                                        <h6>
                                        <i>135 Min.</i>
                                        <strong> &nbsp; | &nbsp; </strong>
                                        <i>Action </i>
                                        </h6>
                                    </div>

                                    <!-- Button -->
                                    <!-- <a href="#" class="btn btn-primary" style="margin: 5px;">Add to Cart</a> -->
                                </div>
                            </div>
                    </div>
                    <!-- End Card -->

            {{--the at end for each would go here--}}
    </div>

</div>
@endsection