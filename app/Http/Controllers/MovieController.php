<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Rental;
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

    public function library()
    {
      $Movie = Movie::with('genre')->get()->toArray();
//      dd($Movie);
      return view('library')->with('movies', $Movie);
    }

    public function welcome()
    {
        $Movie = Movie::with('genre')->get()->toArray();
//      dd($Movie);
        return view('welcome')->with('movies', $Movie);
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
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $Movie)
    {
        //
        return view('movies.updateMovie');
            //->with('movies', $Movie);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $Movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $Movie)
    {
        //dd($Movie->toArray());
        return view('movies.updateMovie')->with('movie', $Movie);
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
        //$Movie = Movie::findorFail('id');
        $Movie->title = $request['title'];
        $Movie->length = $request['length'];
        $Movie->description = $request['description'];

        if(array_key_exists('onBluRay', $request))
        {
            $Movie->onBluRay = $request['onBluRay'];
        }

        if(array_key_exists('isDisc', $request)){
            $Movie->isDisc = $request['isDisc'];
        }

        if ($request->file('coverPhoto'))
        {
            $this->savePicture($request, $Movie);
        }

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

    private function savePicture(Request $request, Movie $movie)
    {
        $original = $request->file('coverPhoto');
        $image = Image::make($original)->resize(250, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 75);

        $filename = 'movie_' . $movie->id . '.jpg';
        if (Storage::disk('web')->exists($filename)) {
            Storage::disk('web')->delete($filename);
        }
        Storage::disk('web')->put($filename, $image->getEncoded());
    }

//    /**
//     * Rent the specified movie
//     *
//     *
//     */
//    private function rentMovie(Request $request, Movie $movie)
//    {
//
//
//        return redirect()->route('rentMovie');
//
//    }
}
