<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('pages.order.order-index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventories = Inventory::all();
        return view('pages.order.order-create', compact('inventories'));
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
            'orderer_name' => 'required|max:255',
            'inventory_id' => 'required',
            'quantity' => 'required|numeric',
            'lead_time' => 'required|numeric',
            'used' => 'required|numeric',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $inventories = Inventory::all();
        return view('pages.order.order-edit', compact('order', 'inventories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'orderer_name' => 'required|max:255',
            'inventory_id' => 'required',
            'quantity' => 'required|numeric',
            'lead_time' => 'required|numeric',
            'used' => 'required|numeric',
        ]);
        $order = Order::find($id);
        $order->update($request->all());
        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Order::find($id);
        $post->delete();
        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
