@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 120px;">

        <div class="row">
            <div class="pb-1 text-right">

                <a href="{{ route('user.update') }}" class="btn btn-small btn-success" style="margin:30px;">Edit Profile</a>

            </div>
            <h2> <strong>{{ Auth::user()-> firstName }} {{ Auth::user()-> middleName }} {{ Auth::user()-> lastName }} </strong></h2>
            <h2>User Profile:</h2>
        </div>

    <div class="row">
        <div class="profileBox" align="center">
            <img src="http://drhrlaw.com/wp-content/uploads/2015/02/profile-placeholder.jpg">
        </div>
        <div class="profileBox">
            <div style="margin:15px;">
                {{--<h4><strong></strong></h4>--}}
                <h2 id="indentHard"><strong>{{ Auth::user()-> firstName }} {{ Auth::user()-> middleName }} {{ Auth::user()-> lastName }} </strong></h2>
            </div>
            <hr>
            <div style="margin:15px;">
                <h6><strong>Email Address:</strong></h6>
                <h4 id="indentHard">{{ Auth::user()-> email }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>Cell Number:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> cellNumber }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>Street:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> street }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>City</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> city }}</h4>
            </div>
            <div style="margin:15px;">
                <h6><strong>State & Zip:</strong></h6>
                <h4 id="indentHard"> {{ Auth::user()-> state }}, {{ Auth::user()-> zip }}</h4>
            </div>
        </div>
    </div>
    <div class="profileBlock">
        <h2>Rental History:</h2>
        <hr>
        <strong> This is merely a placeholder for the upcoming rental history function. You can totally ignore this until it works.  </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis porta risus nec facilisis. Donec aliquam elit vel massa ultricies iaculis. Suspendisse elementum urna eget nisi tempus fringilla. Aenean eu tellus nibh. Sed suscipit eu ligula id tincidunt. Sed pretium, sapien a fermentum lobortis, odio justo dapibus velit, non fringilla dolor neque eu lorem. Nunc leo dui, vestibulum sit amet condimentum at, egestas vel arcu.

        Nullam tincidunt facilisis tristique. Donec vestibulum malesuada massa, quis convallis odio egestas nec. Curabitur ac accumsan mi. Quisque dictum congue mauris, non sodales quam euismod a. Nam mi velit, mattis nec interdum id, tristique vitae dui. Etiam interdum risus convallis lorem aliquet sollicitudin. Pellentesque pretium justo metus, sit amet fringilla quam luctus et. Nunc sit amet elementum lectus. Vestibulum ac augue vel justo vestibulum vehicula. Curabitur posuere risus imperdiet urna congue, in ornare dolor congue. Sed aliquam risus ut nisi lobortis, ac gravida lorem elementum. Cras suscipit convallis odio, id placerat enim. Sed dapibus, enim eget imperdiet ullamcorper, lacus tellus molestie lacus, sed venenatis mauris tellus in libero. Donec scelerisque lobortis mattis.
    </div>
    <div class="profileBlock">
        <h2>Review History:</h2>
        <hr>
        <strong> This is merely a placeholder for the upcoming review history function. You can totally ignore this until it works.  </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis porta risus nec facilisis. Donec aliquam elit vel massa ultricies iaculis. Suspendisse elementum urna eget nisi tempus fringilla. Aenean eu tellus nibh. Sed suscipit eu ligula id tincidunt. Sed pretium, sapien a fermentum lobortis, odio justo dapibus velit, non fringilla dolor neque eu lorem. Nunc leo dui, vestibulum sit amet condimentum at, egestas vel arcu.

        Nullam tincidunt facilisis tristique. Donec vestibulum malesuada massa, quis convallis odio egestas nec. Curabitur ac accumsan mi. Quisque dictum congue mauris, non sodales quam euismod a. Nam mi velit, mattis nec interdum id, tristique vitae dui. Etiam interdum risus convallis lorem aliquet sollicitudin. Pellentesque pretium justo metus, sit amet fringilla quam luctus et. Nunc sit amet elementum lectus. Vestibulum ac augue vel justo vestibulum vehicula. Curabitur posuere risus imperdiet urna congue, in ornare dolor congue. Sed aliquam risus ut nisi lobortis, ac gravida lorem elementum. Cras suscipit convallis odio, id placerat enim. Sed dapibus, enim eget imperdiet ullamcorper, lacus tellus molestie lacus, sed venenatis mauris tellus in libero. Donec scelerisque lobortis mattis.
    </div>

</div>

@endsection