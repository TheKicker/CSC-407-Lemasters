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
        $reviews = Reviews::get()->toArray();
        return view('userProfile')->with('reviews', $reviews);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Reviews $review, Movie $movie)
    {
       // dd($reviews);
        $review = Reviews::get();
       // dd($movie);
        return view('movies.reviewMovie')
            ->with('movies', $movie);

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
        dd($review);
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
    public function show(Reviews $review)
    {
        //dd($review);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviews $review)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviews $review)
    {
        $id = $request->id;
        $r = Reviews::find($id);
        $r->update(['updated_at' => date('Y-m-d H:i:s')]);

        $url = '/user/' . Auth::user() ->id;

        return redirect ($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reviews $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $review)
    {

        $selected = Reviews::find($review['id']);
        if ( $selected->delete()) {
            return redirect()->route('user.userProfile');
        }
        else {
            return redirect()->route('status');
        }

    }
}
