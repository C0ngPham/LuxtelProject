<?php

namespace App\Http\Controllers;

use App\Booking;
use App\order;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guest = Booking::where('type', 1)->get();
        $premiere = Booking::where('type', 2)->get();
        $suite = Booking::where('type', 3)->get();

        return view('home', compact('guest', 'premiere', 'suite'));
    }

    public function booking()
    {
        $data = request()->validate([
            'type' => 'required',
            'name' => 'required|min:3',
            'phone' => 'required|digits_between:10,11',
            'email' => 'required|email',
            'arrival' => 'required|date|after:today',
            'departure' => 'required|date|after:today',
            'room' => 'required',
            'guest' => 'required',
            'note' => 'max:100',

        ]);


        $booking = new Booking();
        $booking->type = request('type');
        $booking->name = request('name');
        $booking->phone = request('phone');
        $booking->email = request('email');
        $booking->arrival = request('arrival');
        $booking->departure = request('departure');
        $booking->room = request('room');
        $booking->guest = request('guest');
        $booking->note = request('note');
        $booking->save();
        return back();
    }
}
