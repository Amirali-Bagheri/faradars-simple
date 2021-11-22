<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function carts()
    {
        $carts = Cart::getContent();

        return view('cart', compact('carts'));
    }

    public function add(Request $request)
    {
        //dd($request->all());
        Cart::add($request->course_id, $request->name, $request->price, $request->quantity, []);

        return back();
    }

    public function remove($id)
    {
        Cart::remove($id);

        return back();
    }
}
