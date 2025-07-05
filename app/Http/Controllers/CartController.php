<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // ✅ Show cart items for the logged-in user
    public function show($country)
    {
        $userId = Auth::id();

        $cartItems = Cart::where('user_id', $userId)
                         ->where('country', $country)
                         ->get();

        $total = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'country', 'total'));
    }

    // ✅ Add item to cart for authenticated user
    public function addToCart(Request $request)
    {
        $request->validate([
            'package' => 'required|string',
            'price' => 'required|numeric',
            'country' => 'required|string',
        ]);

        Cart::create([
            'user_id'      => Auth::id(),
            'package_name' => $request->input('package'),
            'price'        => $request->input('price'),
            'country'      => $request->input('country'),
            'quantity'     => 1, // default quantity 1
        ]);

        return redirect()->back()->with('success', 'Package added to cart!');
    }

    // ✅ Clear all cart items for the user
    public function clearCart()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

    // ✅ Optional: show all cart items for admin/user (if needed)
    public function index()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $total = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        return view('cart.index', compact('cartItems', 'total'));
    }
}
