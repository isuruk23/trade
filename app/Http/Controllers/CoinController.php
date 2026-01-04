<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index() {
        return view('admin.coins', [
            'coins' => Coin::all()
        ]);
    }

    public function store(Request $request) {
        Coin::create($request->validate([
            'symbol' => 'required|unique:coins',
            'name' => 'required',
            'price' => 'required|numeric',
            'total_supply' => 'required|numeric'
        ]));

        return back()->with('success', 'ETX Coin Added');
    }

    public function updatePrice(Request $request, Coin $coin)
    {
        $request->validate([
            'price' => 'required|numeric|min:0'
        ], [
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price must be at least 0'
        ]);

        $coin->price = $request->price;
        $coin->save();

        return back()->with('success', "{$coin->symbol} price updated successfully.");
    }
}
