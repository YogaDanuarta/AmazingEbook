<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Carbon\Carbon;

class CartController extends Controller
{
    public function addtocart($id){
        $order = new Order();
        $order->account_id = Auth::user()->account_id;
        $order->ebook_id = $id;

        $order->save();

        return redirect('/cart');
    }

    public function cart(){
        $carts = Order::where('account_id', Auth::user()->account_id)->get();
        return view('cart', compact('carts'));
    }

    public function deletecart($id){
        Order::destroy($id);
        return redirect('/cart');
    }

    public function submitcart(){
        Order::where('account_id', Auth::user()->account_id)->delete();
        return redirect('/success');
    }
}
