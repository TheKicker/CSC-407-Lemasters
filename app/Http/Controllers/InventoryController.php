<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Inventory = Inventory::get()->toArray();
        return view('inventory.indexInventory')->with('inventory', $Inventory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventory.addInventory');

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

        $Inventory = new Inventory($input);
        $Inventory->save();

        return redirect()->route('inventory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory $Inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $Inventory)
    {
        //
        return view('inventory.updateInventory')->with('inventory', $Inventory);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory $Inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $Inventory)
    {
        dd($Inventory->toArray());
        return view('inventory.updateInventory')->with('inventory', $Inventory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Inventory  $Inventory
     * @return \Illuminate\Http\Response
     */
    public function update($request, Inventory $Inventory)
    {
        $Inventory = Inventory::findorFail($request['id']);
        $Inventory->movieID = $request['movieID'];
        $Inventory->dvdInventory = $request['dvdInventory'];
        $Inventory->blurayInventory = $request['blurayInventory'];

        $Inventory->save();
        return redirect()->route('inventory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory $inventory)
    {

        $selected = Inventory::find($inventory['id']);
        if ( $selected->delete()) {
            return redirect()->route('inventory.index');
        }
        else {
            return redirect()->route('status');
        }
    }
}

