<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollsController extends Controller
{
    public function enroll(Request $request)
    {
        foreach (Cart::getContent() as $cart) {
            auth()->user()->enrolls()->create([
                'course_id' => $cart->id
            ]);
        }

        Cart::clear();

        return redirect()->back();
    }
}
