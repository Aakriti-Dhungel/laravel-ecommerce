<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    public function add_to_cart(Request $request)
    {
        // return $request->all();
        $request->validate([
            'product_id' => 'required',
            'qty' => 'required|min:1',
        ]);
        $user_id = Auth::user()->id;
        $product = Product::findOrFail($request->product_id);

        $amount = $product->discount > 0 ? ($product->price - ($product->price * $product->discount) / 100) * $request->qty : $product->price * $request->qty;

        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->product_id = $request->product_id;
        $cart->qty = $request->qty;
        $cart->amount = $amount;
        $cart->save();

        toast('Product added to cart successfully', 'success');
        return redirect()->back();
    }

    public function cart(){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        return view('frontend.cart',compact('carts'));
    }
}
