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
        $Movie = Movie::get()->toArray();
        return view('movies.indexMovie')->with('movies', $Movie);
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

        $Movie = new Movie($input);
        $Movie->save();

        return redirect()->route('movie.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $Movie)
    {
        //
        return view('movies.updateMovie')->with('movies', $Movie);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $Movie)
    {
        ($Movie->toArray());
        return view('movies.updateMovie')->with('movies' , $Movie);
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
//        dd($Movie->toArray());
        $Movie = Movie::findorFail($request['id']);
        $Movie->title = $request['title'];
        $Movie->length = $request['length'];
        $Movie->description = $request['description'];
//        if(array_key_exists('onBlueRay', $request)){
//            $Movie->onBlueRay = $request['onBlueRay'];
//        }
//        if(array_key_exists('onDVD', $request)){
//            $Movie->onDVD = $request['onDVD'];
//        }
//        $Movie->coverPhoto = $request['coverPhoto'];
        $Movie->save();
        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $Movie)
    {

        $selected = Movie::find($Movie['id']);
        if ( $selected->delete()) {
            return redirect()->route('movie.index');
        }
        else {
            return redirect()->route('status');
        }


    }
}
