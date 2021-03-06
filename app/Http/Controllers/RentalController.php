<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Kiosk;
use App\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
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
        return view('movies.indexMovie')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Kiosk $kiosk
     * @return \Illuminate\Http\Response
     */
    public function create(Movie $movie)
    {
//        dd($movie);
        $kiosks = Kiosk::get();
        return view('movies.rentMovie')->with('movie', $movie)->with('kiosks', $kiosks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= $request->all();
        //short way to do an if then statement (:
        $data['format'] = ($data['radios'] == 1 ? 'DVD' : 'BluRay');
        $data['rentalDate'] = date('Y-m-d H:i:s');
        //dd($data);
        $rental = new Rental($data);
        $rental->save();

        return redirect('/library');
        //$rental['returnDate'] = date('Y-m-d H:i:s');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
        $id = $request->id;
        $r = Rental::find($id);
        $r->update(['returnDate' => date('Y-m-d H:i:s')]);

        $url = '/user/' . Auth::user() ->id;

        return redirect ($url);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }

}
