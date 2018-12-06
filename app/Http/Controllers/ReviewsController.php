<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Kiosk;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Reviews $reviews)
    {
        dd($reviews);
        $movie = Movie::get();
        return view('movies.reviewMovie'-with('movies', $movie));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Reviews $review)
    {
        //
        $input = $request->all();

        $review = new Reviews($input);
        $review->save();

        return redirect()->route('user.userProfile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $Movie)
    {
        //dd($review);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $Movie)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $Movie)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reviews $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $reviews)
    {

        $selected = Reviews::find($reviews['id']);
        if ( $selected->delete()) {
            return redirect()->route('user.userProfile');
        }
        else {
            return redirect()->route('status');
        }

    }
}