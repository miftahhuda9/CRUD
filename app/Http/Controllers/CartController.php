<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add a single item to the cart
    public function addItem(Request $request)
    {
        $validated = $request->validate(Cart::$rules);
        $item = Cart::create($validated);
        return response()->json($item, 201);
    }

    // Add multiple items to the cart
    public function addItems(Request $request)
    {
        $validatedItems = $request->validate([
            '*.name' => 'required|string|max:99',
            '*.quantity' => 'required|integer|max:99',
            '*.price' => 'required|integer|min:1',
        ]);

        $items = Cart::insert($validatedItems);
        return response()->json(['message' => 'Items added successfully'], 201);
    }

    // Get a single item from the cart
    public function getItem($id)
    {
        $item = Cart::find($id);
        if (!$item) return response()->json(['error' => 'Item not found'], 404);
        return response()->json($item);
    }

    // Get multiple items from the cart
    public function getItems()
    {
        $items = Cart::all();
        return response()->json($items);
    }

    // Delete a single item from the cart
    public function deleteItem($id)
    {
        $item = Cart::find($id);
        if (!$item) return response()->json(['error' => 'Item not found'], 404);
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }

    // Delete multiple items from the cart
    public function deleteItems(Request $request)
    {
        $ids = $request->validate(['ids' => 'required|array']);
        Cart::destroy($ids['ids']);
        return response()->json(['message' => 'Items deleted successfully']);
    }
}
