<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //
    public function Create(Movie $movie, Reviews $reviews)
    {
        return view('movies.reviewMovie');
    }
}
