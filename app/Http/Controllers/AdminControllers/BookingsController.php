<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{

    function index() {

        $bookings = Booking::get();

        return view('admin.bookings', compact('bookings'));

    }


    function destroy($id){

        try {
            if(!$id)
                return back()->with('warning','This booking doesnt found');

            $booking = Booking::find($id);
            if(!$booking)
                return back()->with('warning','This booking doesnt found');

            $booking->delete();
            return back()->with('success','Deleted Successfully');
        } catch (\Throwable $th) {
            return back()->with('error','Something wrong, try later again please');
        }

    }
}
