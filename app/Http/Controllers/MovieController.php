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
        $movies = Movie::get()->toArray();
        return view('movies/indexMovie')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies/addMovie');

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

        $movies = new Movie($input);
        $movies->save();

        return redirect()->route('movie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movies)
    {
        //
        return view('movies/updateMovie')->with('movies', $movies);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movies)
    {
        dd($movies->toArray());
        return view('movies/updateMovie')->with('movies', $movies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $movies
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        //
        $input = $request-> all();

        $movies = Movie::find($id);
        $movies->fill($input);

        return redirect('movie.index');
//        $movies = movie::findorFail($request['id']);
//        $movies->title = $request['title'];
//        $movies->genreID = $request['genreID'];
//        $movies->length = $request['length'];
//        $movies->description = $request['description'];
////        if (array_key_exists('onBlueRay', $request)) {
////            $movies->onBlueRay = $request['onBlueRay'];
////        }
////        if (array_key_exists('onDVD', $request)) {
////            $movies->onDVD = $request['onDVD'];
////        }
//        $movies->coverPhoto = $request['coverPhoto'];
//        $movies->save();
//        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movies)
    {
        //
        $selected = Movie::find($movies['id']);
        if ( $selected->delete()) {
            $this->setMessage('Successfully deleted the movie!');
        } else {
            $this->setMessage('Could not delete the movie!', 'error');
        }
        return redirect()->route('movie.index');
//        $selectedDelete = Movie::findOrFail($movies['id']);
//        if ($selectedDelete->delete()) {
//            return redirect()->route('movie.index');
//
//        }
    }
}

