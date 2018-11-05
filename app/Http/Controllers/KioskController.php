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
      return view('kiosk/indexKiosk')->with('kiosks',$kiosks);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kiosks/addKiosk');

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

        $kiosk = new Kiosk($input);
        $kiosk->save();

        return redirect()->route('kiosk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kiosk  $kiosk
     * @return \Illuminate\Http\Response
     */
    public function show(Kiosk $kiosk)
    {
        //
        return view('kiosk/updateKiosk')->with('kiosks', $kiosk);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kiosk  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function edit(Kiosk $kiosks)
    {
        //
        dd($kiosks);
        return view('kiosk/updateKiosk')->with('kiosks', $kiosks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kiosk  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kiosk $kiosks)
    {
        //
        $kiosks->location = $request['location'];
        $kiosks->address = $request['address'];


        $kiosks->save();
        return redirect()->route('kiosk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kiosk  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kiosk $kiosks)
    {
        //
        $selected = Kiosk::find($kiosks['id']);
        if ( $selected->delete()) {
            $this->setMessage('Successfully deleted the kiosk!');
        } else {
            $this->setMessage('Could not delete the kiosk!', 'error');
        }
        return redirect()->route('kiosk.index');
    }
}
