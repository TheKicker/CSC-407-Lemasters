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
        $inventory = Inventory::get()->toArray();
        return view('inventory.indexInventory')->with('inventory', $inventory);
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

        $inventory = new Inventory($input);
        $inventory->save();

        return redirect()->route('inventory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
        return view('inventory.updateInventory')->with('inventory', $inventory);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        dd($inventory->toArray());
        return view('inventory.updateInventory')->with('inventory', $inventory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        $input = $request-> all();

        $inventory = Inventory::find($id);
        $inventory->fill($input);

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
            echo('Successfully deleted the inventory!');
        } else {
            echo('Could not delete the inventory!');
        }
        return redirect()->route('inventory.index');
//
//        }
    }
}

