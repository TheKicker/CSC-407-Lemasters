@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 96px;">
    <h2 style="text-shadow: 1px 1px yellow"><strong><i>Contact Us</i></strong></h2>
    <hr>
    <p>There are <strong>Yellow Bucket's</strong> all around.  We are dedicated to our customers and want them to have an experience they will never forget once renting from Yellow Bucket.</p>
    <p> We feel inclined to make sure our customers are content with our business.  If issues arise please feel free to contact us.  Our headquarters is located in Beaver Falls.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <strong>Ut enim ad minim veniam, </strong>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="mapouter" align="center"><div class="gmap_canvas">
            <iframe width="600" height="450" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Geneva%20College&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <style>.mapouter{text-align:right;height:450px;width:600px;}.gmap_canvas
                                                                    {overflow:hidden;background:none!important;height:450px;width:600px;}
        </style>
        <p>
            <br>
            <br>
            Immediate Contact:<br>
            support@yellowbucket.com<br>
            1.800.736.6808<br>
        </p>
    </div>
</div>
@endsection