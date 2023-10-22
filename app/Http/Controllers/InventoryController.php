<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
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
        $inventories = Inventory::all();
        return view('pages.inventory.inventory-index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.inventory.inventory-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'storage_cost' => 'required|numeric',
            'request_period' => 'required|numeric',
            'unit' => 'required',
            'convertion' => 'required|numeric'
        ]);

        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'Inventory created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('pages.inventory.inventory-edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'storage_cost' => 'required|numeric',
            'request_period' => 'required|numeric',
            'unit' => 'required',
            'convertion' => 'required|numeric'
        ]);
        $inventory = Inventory::find($id);
        $inventory->update($request->all());
        return redirect()->route('inventories.index')
            ->with('success', 'Inventory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Inventory::find($id);
        $post->delete();
        return redirect()->route('inventories.index')
            ->with('success', 'Inventory deleted successfully');
    }
}
