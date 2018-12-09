<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Message;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index')->with('products',$products);
    }

    public function sendMessage(Request $request) {
        $message = new Message;
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->phone = $request->input('phone');
        $message->save();

        return redirect('/');
        
    }
}
