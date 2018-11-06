<?php

namespace App\Http\Controllers;
use App\Kiosk;
use Illuminate\Http\Request;

class KioskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
        $kiosks = Kiosk::get()->toArray();
        return view('kiosks.indexKiosk')->with('kiosks', $kiosks);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kiosks.addKiosk');

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
        $input = $request->all();

        $kiosks = new Kiosk($input);
        $kiosks->save();

        return redirect()->route('kiosk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kiosk  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function show(Kiosk $kiosks)
    {
        //
        return view('kiosks.updateKiosk')->with('kiosks', $kiosks);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kiosk  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function edit(Kiosk $kiosks)
    {

//        dd($kiosk->toArray());
        return view('kiosks.updateKiosk')->with('kiosks', $kiosks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kiosk $kiosk)
    {
        //
        $kiosk->location = $request['location'];
        $kiosk->address = $request['address'];


        $kiosk->save();
        return redirect()->route('kiosk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kiosk $kiosk)
    {
        $selected = Kiosk::find($kiosk['id']);
        if ( $selected->delete()) {
            return redirect()->route('kiosk.index');
        }
        else {
            return redirect()->route('status');
        }
    }
}
