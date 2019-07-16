@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 96px;">

    <div align="center"><h2><strong>Well begun, is half done. </strong> <i>Aristotle</i></h2></div>

    <div>
        <h3 style="text-shadow: 1px 1px yellow"><strong><i>Developers Notes</i></strong></h3>

        <h5 id="indentSoft"> Status</h5>
            <p id="indentHard"> The only thing that does not work is the ability to make and display reviews.  We simply ran out of time but made an effort to try nonetheless.  </p>
            <p id="indentHard"> CRUD functions are available for Movies, Kiosks, Inventory. We did not strictly limit admin privledges to any set users. </p>
            <p id="indentHard"> Users can rent movies and return them. Their rental history posts to the users profile page accessed only when they create an account / sign in.</p>
            <p id="indentHard"> </p>

        <h5 id="indentSoft"> Future Ideas</h5>
            <p id="indentHard"> Would have liked to add a genre feature to display genre definitions and suggestions for movies</p>
            <p id="indentHard"> On home screen (welcome screen) the movie quote would be a randomized movie quote with a link to the appropriate movie in our library</p>
            <p id="indentHard"> Individual movie pages would have a small window or link to Youtube for the corresponding movie trailer. </p>
            <p id="indentHard"> Hello, User in the top right would be dynamic based on time of day (Good morning, Good afternoon, Good night) </p>

        <h5 id="indentSoft"> Quick Fix: Seeding Issues </h5>
            <p id="indentHard"> Make sure everything is typed correctly then run <strong>php artisan cache:clear</strong> followed by <strong>composer dumpautoload</strong></p>

        <h5 id="indentSoft"> Quick Fix: Routes </h5>
            <p id="indentHard"> Many issues were traced back to bad routing -- dynamic pages should always be directed to controllers while it is okay for static pages to be hardcoded. </p>
            <p id="indentHard"> And when necessary <strong>->middleware('auth')</strong> at the end will force the user to login before using feature.</p>

    </div>
    <hr>
   <div>
       <h3 style="text-shadow: 1px 1px yellow"><strong><i>Cav Lemasters</i></strong></h3>
            <h5 id="indentSoft"> Deliverable 1 </h5>
                    <p id="indentHard"> Created Balsamiq layouts, 4 Personas</p>

            <h5 id="indentSoft"> Deliverable 2 </h5>
                    <p id="indentHard"> DB implement, created project, created a few basic files, edited header/footer, edited controllers and wrote basic routing. Created site favicon. </p>

            <h5 id="indentSoft"> Deliverable 3 </h5>
                    <p id="indentHard"> Prepared migrations for users, genre, movie and disc tables. Edited user registration page. Created seeding for users, movies and kiosks.  </p>

            <h5 id="indentSoft"> Deliverable 4 </h5>
                    <p id="indentHard"> Created create(movie/kiosk) forms, added necessary routing, created Admin Dashboard, created files for adding movie/kiosk and indexing movie/kiosk</p>

            <h5 id="indentSoft"> Deliverable 5 </h5>
                    <p id="indentHard"> Created inventory CRD functions and web routing. Update is not yet functional but working on it. </p>

            <h5 id="indentSoft"> Deliverable 6 </h5>
                    <p id="indentHard"> Installed Image Intervention framework -- created select movie screen, updated to Kiosk selection, working on funtionality. </p>

            <h5 id="indentSoft"> Deliverable 7 </h5>
                    <p id="indentHard"> Various fixes, reviews MVC, general cosmetic updates and changes.  </p>

   </div>

        <hr>
    <div>
        <h3 style="text-shadow: 1px 1px yellow"><strong><i>Haylee Heaton</i></strong></h3>
            <h5 id="indentSoft"> Deliverable 1 </h5>
                    <p id="indentHard"> Created Balsamiq layouts, 4 Personas </p>

            <h5 id="indentSoft"> Deliverable 2 </h5>
                    <p id="indentHard"> DB implement  </p>

            <h5 id="indentSoft"> Deliverable 3 </h5>
        <p id="indentHard"> Prepared migrations for kiosks, rental and review tables.  Created seeding for users.  Built functionality for Adding a movie. </p>
                <p id="indentHard">Helped with functionality for updating and deleting movies.  Added the correct routing. </p>

            <h5 id="indentSoft"> Deliverable 4 </h5>
                    <p id="indentHard"> </p>

            <h5 id="indentSoft"> Deliverable 5 </h5>
                    <p id="indentHard"> Lorem Ipsum...</p>

            <h5 id="indentSoft"> Deliverable 6 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>

            <h5 id="indentSoft"> Deliverable 7 </h5>
                    <p id="indentHard"> Various bug fixes, rental MVC, last minute touches </p>

    </div>
        <hr>
    <div>
        <h3 style="text-shadow: 1px 1px yellow"><strong><i>Spencer York</i></strong></h3>
            <h5 id="indentSoft"> Deliverable 1 </h5>
                    <p id="indentHard"> Created Balsamiq layouts, 4 Personas </p>

            <h5 id="indentSoft"> Deliverable 2 </h5>
                    <p id="indentHard"> DB Implement, edited routes </p>

            <h5 id="indentSoft"> Deliverable 3 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>

            <h5 id="indentSoft"> Deliverable 4 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>

            <h5 id="indentSoft"> Deliverable 5 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>

            <h5 id="indentSoft"> Deliverable 6 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>


    </div>
</div>

@endsection
