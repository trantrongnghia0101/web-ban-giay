<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\products;
use Illuminate\Http\Request;
use Session;

class GiohangController extends Controller
{   
    public function giohang()
    {
        $cart = Session::get('cart', []);
        $total = 0;
    
        if (!is_array($cart) && !is_object($cart)) {
        } else {
            foreach ($cart as $item) {
                $total += $item['quantity'] * $item['price'];
            }
        }
    
        return view('giohang', compact('cart', 'total'));
    }
    public function addToCart(Request $request, $product_id)
    {
        $product = products::find($product_id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$product_id])) {
            // Sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
            $cart[$product_id]['quantity']++;
    
            session()->put('cart', $cart);
    
            return redirect()->back()->with('success', 'Số lượng sản phẩm đã được tăng.');
        }
    
        // Sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ hàng
        $cart[$product_id] = [
            'name' => $product->name,
            'img' => $product->img,
            'quantity' => 1,
            'price' => $product->price,
            'bill_id' => null,
        ];
    
        session()->put('cart', $cart);
    
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }
public function removeFromCart(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
}
public function clearCart()
{
    session()->forget('cart');

    return redirect()->back()->with('success', 'Giỏ hàng đã được xóa.');
}

public function calculateTotal()
{
    $cart = session()->get('cart', []);
    $total = 0;

    foreach ($cart as $item) {
        $total += $item['quantity'] * $item['price'];
    }

    return $total;
}
}