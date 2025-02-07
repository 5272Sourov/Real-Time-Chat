<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Events\ChatEvent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function chat()
    {
    	return view('chat');
    }
    public function send(request $request)
    {
    	
    	$user = User::find(Auth::id());
    	event(new ChatEvent($request->message,$user));
    }
    // public function send()
    // {
    // 	$message = 'Hello';
    // 	$user = User::find(Auth::id());
    // 	event(new ChatEvent($message,$user));
    // }
}
