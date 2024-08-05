<?php

namespace App\Http\Controllers;

use App\Models\StockMovement;
use App\Models\Item;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class StockMovementController extends Controller
{
    public function index()
    {
        $stockMovements = StockMovement::all();
        return view('stock_movements.index', compact('stockMovements'));
    }

    public function create()
    {
        $items = Item::all();
        $warehouses = Warehouse::all();
        return view('stock_movements.create', compact('items', 'warehouses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required',
            'warehouse_id' => 'required',
            'quantity' => 'required|integer',
            'movement_type' => 'required|in:in,out',
        ]);

        StockMovement::create($request->all());

        return redirect()->route('stock_movements.index')
            ->with('success', 'Stock movement created successfully.');
    }

    public function show(StockMovement $stockMovement)
    {
        return view('stock_movements.show', compact('stockMovement'));
    }

    public function edit(StockMovement $stockMovement)
    {
        $items = Item::all();
        $warehouses = Warehouse::all();
        return view('stock_movements.edit', compact('stockMovement', 'items', 'warehouses'));
    }

    public function update(Request $request, StockMovement $stockMovement)
    {
        $request->validate([
            'item_id' => 'required',
            'warehouse_id' => 'required',
            'quantity' => 'required|integer',
            'movement_type' => 'required|in:in,out',
        ]);

        $stockMovement->update($request->all());

        return redirect()->route('stock_movements.index')
            ->with('success', 'Stock movement updated successfully.');
    }

    public function destroy(StockMovement $stockMovement)
    {
        $stockMovement->delete();

        return redirect()->route('stock_movements.index')
            ->with('success', 'Stock movement deleted successfully.');
    }
}
