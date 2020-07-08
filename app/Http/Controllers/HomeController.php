<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Payment;
use App\Room;
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
        // $guest = Booking::where('type', 1)->get();
        // $premiere = Booking::where('type', 2)->get();
        // $suite = Booking::where('type', 3)->get();

        return view('home');
    }

    public function customer()
    {
        $title = 'Customer Management';
        $customer = Customer::groupBy('email')->get();
        return view('customer', compact('title', 'customer'));
    }
    public function book()
    {
        $title = 'Payment Booking Management';
        $guest = Payment::where('type', 1)->get();
        $premiere = Payment::where('type', 2)->get();
        $suite = Payment::where('type', 3)->get();
        return view('book', compact('guest', 'premiere', 'suite', 'title'));
        // return view('book');
    }
    public function room()
    {
        $title = 'Room Management';
        return view('room', compact('title'));
    }

    public function booking()
    {
        $data = request()->validate([
            'type' => 'required',
            'name' => 'required|min:3',
            'phone' => 'required|digits_between:10,11',
            'email' => 'required|email',
            'arrival' => 'required|date|after:today',
            'departure' => 'required|date|after:tomorrow',
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

    public function payment()
    {
        $data = request()->validate([
            'type' => 'required',
            'name' => 'required|min:3',
            'phone' => 'required|digits_between:10,11',
            'email' => 'required|email',
            'arrival' => 'required|date|after:today',
            'departure' => 'required|date|after:tomorrow',
            'room' => 'required',
            'guest' => 'required',
            'note' => 'max:100',
            'cost' => 'required',
        ]);
        $cus = new Customer();
        $pay = new Payment();

        $pay->type = request('type');
        $pay->email = request('email');
        $pay->arrival = request('arrival');
        $pay->departure = request('departure');
        $pay->room = request('room');
        $pay->guest = request('guest');
        $pay->note = request('note');
        $pay->cost = request('cost');
        $pay->save();



        $cus->name = request('name');
        $cus->phone = request('phone');
        $cus->email = request('email');
        $cus->save();
        return back();
    }
}
