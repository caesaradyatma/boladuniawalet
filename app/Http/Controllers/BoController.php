<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class BoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('bo_index');
    }

    public function messages(){
        $messages = Message::orderBy('created_at','desc')->get();
        return view('bo_messages')->with('messages',$messages);
    }
}
