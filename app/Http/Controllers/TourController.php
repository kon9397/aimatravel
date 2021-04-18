<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    public function index() {
        $tour = Tour::find(2);
        return view('index', ['tours' => $tour]);
    }

    public function addFormIndex() {
        return view('add-tours.index');
    }

    public function addTour(Request $request) {
        $tour = new Tour();
        $tour->tour_code = $request->input("tourCode");
        $tour->country = $request->input("country");
        $tour->tour_focus = $request->input("focus");
        $tour->price = $request->input("price");
        $tour->days_amount = $request->input("daysAmount");
        $tour->supply = $request->input("supply");
        $tour->transport = $request->input("transport");
        $tour->photo_url = $request->input("photoUrl");
        $tour->photo_title = $request->input("photoName");
        $tour->hotel_id = $request->input("hotelId");
        $tour->visa = $request->input("visa");
        $tour->save();
    }
}
