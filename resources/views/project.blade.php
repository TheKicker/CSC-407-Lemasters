@extends('layouts.app')

@section('content')

<div class="container" style="margin-bottom: 96px;">

    <div>
        <h3><strong>General Notes</strong></h3>

        <h5 id="indentSoft"> Seeding Issues </h5>
            <p id="indentHard"> Make sure everything is typed correctly then run <strong>php artisan cache:clear</strong> followed by <strong>composer dumpautoload</strong></p>

        <h5 id="indentSoft"> Routes </h5>
            <p id="indentHard"> Be careful in how you write routing -- dynamic pages should always be directed to controllers while it is okay for static pages to be hardcoded. </p>
            <p id="indentHard"> And when necessary <strong>->middleware('auth')</strong> at the end will force the user to login before using feature.</p>

    </div>
    <hr>
   <div>
       <h3><strong>Cav Lemasters</strong></h3>
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
        <h3><strong>Haylee Heaton</strong></h3>
            <h5 id="indentSoft"> Deliverable 1 </h5>
                    <p id="indentHard"> Created Balsamiq layouts, 4 Personas </p>

            <h5 id="indentSoft"> Deliverable 2 </h5>
                    <p id="indentHard"> DB implement  </p>

            <h5 id="indentSoft"> Deliverable 3 </h5>
            <p id="indentHard"> Prepared migrations for kiosks, rental and review tables.  Created seeding for users.  Built functionality for Adding a movie.
                <br>Helped with functionality for updating and deleting movies.  Added the correct routing. </p>

            <h5 id="indentSoft"> Deliverable 4 </h5>
                    <p id="indentHard"> Lorem Ipsum...</p>

            <h5 id="indentSoft"> Deliverable 5 </h5>
                    <p id="indentHard"> Lorem Ipsum...</p>

            <h5 id="indentSoft"> Deliverable 6 </h5>
                    <p id="indentHard"> Lorem Ipsum... </p>

            <h5 id="indentSoft"> Deliverable 7 </h5>
                    <p id="indentHard"> Various bug fixes, rental MVC, last minute touches </p>

    </div>
        <hr>
    <div>
        <h3><strong>Spencer York</strong></h3>
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
