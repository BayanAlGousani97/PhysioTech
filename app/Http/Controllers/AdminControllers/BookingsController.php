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
                abort(404);
            $booking = Booking::find($id);
            if(!$booking)
                abort(404);
            $booking->delete();
            return back();
        } catch (\Throwable $th) {
            abort(500);
        }

    }
}
