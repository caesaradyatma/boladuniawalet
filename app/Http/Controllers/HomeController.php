<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Message;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::all();
        return view('index')->with('products',$products);
    }

    public function sendMessage(Request $request)
    {
        $mail_message = new Message;
        $mail_message->email = $request->input('email');
        $mail_message->message = $request->input('message');
        $mail_message->phone = $request->input('phone');
        $mail_message->save();

        $mail_content = array(
            'email' => $request->input('email'),
            'bodyMessage' => $request->input('message'),
            'phone' => $request->input('phone')
        );

        Mail::send('email.email_message', $mail_content, function ($message) {
            $message->from('website.walet@gmail.com', 'Bola Dunia Walet Website');
            $message->to('website.walet@gmail.com', 'Bola Dunia Walet Website');
        
            $message->subject('New Contact Message from boladuniawalet.com');
        });
        

        return redirect('/');

    }
}
