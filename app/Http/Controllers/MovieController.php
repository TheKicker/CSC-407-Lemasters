<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movie = Movie::get()->toArray();
        return view('movies.indexMovie')->with('movies', $movie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies.addMovie');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $movie = new Movie($input);
        $movie->save();

        return redirect()->route('movie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return view('movies.updateMovie')->with('movies', $movie);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        // dd($movie->toArray());
        return view('movies.updateMovie')->with('movies', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie  $Movie
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        //
//        $input = $request-> all();
//
//        $movies = Movie::find($id);
//        $movies->fill($input);
//
//        return redirect('movie.index');


        $movie = movie::findorFail($request['id']);
        $movie->title = $request['title'];
        $movie->genreID = $request['genreID'];
        $movie->length = $request['length'];
        $movie->description = $request['description'];
        if (array_key_exists('onBlueRay', $request)) {
            $movie->onBlueRay = $request['onBlueRay'];
        }
        if (array_key_exists('onDVD', $request)) {
            $movie->onDVD = $request['onDVD'];
        }
        $movie->coverPhoto = $request['coverPhoto'];
        $movie->save();
        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

        $selected = Movie::find($movie['id']);
        if ( $selected->delete()) {
            echo('Successfully deleted the movie!');
        } else {
            echo('Could not delete the movie!');
        }
        return redirect()->route('movie.index');

    }
}

