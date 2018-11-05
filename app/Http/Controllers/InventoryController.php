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
        $inventorys = Inventory::get()->toArray();
        return view('inventory/indexInventory')->with('inventorys', $inventorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventory/addInventory');

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

        $inventorys = new Inventory($input);
        $inventorys->save();

        return redirect()->route('inventory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory $inventorys
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventorys)
    {
        //
        return view('inventory/updateInventory')->with('inventory', $inventorys);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory $inventorys
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventorys)
    {
        //
        return view('inventory/updateInventory')->with('inventory', $inventorys);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Inventory $inventorys
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        //
        $input = $request-> all();

        $inventorys = Inventory::find($id);
        $inventorys->fill($input);

        return redirect('inventory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory $inventory)
    {
        //
        $selected = inventory::find($inventory['id']);
        if ( $selected->delete()) {
            $this->setMessage('Successfully deleted the inventory!');
        } else {
            $this->setMessage('Could not delete the inventory!', 'error');
        }
        return redirect()->route('inventory.index');
//        $selectedDelete = inventory::findOrFail($inventory['id']);
//        if ($selectedDelete->delete()) {
//            return redirect()->route('inventory.index');
//
//        }
    }
}

