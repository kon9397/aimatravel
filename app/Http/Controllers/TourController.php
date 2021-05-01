<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Tour;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index() {
        $tour = Tour::all();
        return view('index', ['tours' => $tour]);
    }

    public function addFormIndex() {
        $hotels = Hotel::all();
        return view('tours.create', ['hotels' => $hotels]);
    }

    public function addTour(Request $request) {
        $fileName = time(). '_' . $request->file("tourImage")->getClientOriginalName();
        $request->file("tourImage")->storeAs("img", $fileName, 'public');
        File::move(public_path('storage/img/' . $fileName), public_path('assets/img/' . $fileName));
        $tour = new Tour();
        $tour->tour_code = $request->input("tourCode");
        $tour->country = $request->input("country");
        $tour->tour_focus = $request->input("focus");
        $tour->price = $request->input("price");
        $tour->days_amount = $request->input("daysAmount");
        $tour->supply = $request->input("supply");
        $tour->transport = $request->input("transport");
        $tour->photo_url = '/assets/img/' . $fileName;
        $tour->covid_test = $request->input("covidTest") === 'on' ? 1 : 0;
        $tour->tour_insurance = $request->input("touristInsurance") === 'on' ? 1 : 0;
        $tour->tour_type = $request->input("tourType");
        $tour->photo_title = $request->input("photoName");
        $tour->hotel_id = $request->input("hotelId");
        $tour->visa = $request->input("visa");
        $tour->save();
    }

    public function editTour($id) {
        $tour = Tour::with('hotel')->where('tour_id', $id)->first();
        $hotels = Hotel::all();
        return view('tours.edit', ['tour' => $tour, 'hotels' => $hotels]);
    }

    public function updateTour(Request $request, $id) {
        $tour = Tour::find($id);

        if($request->hasFile('newTourImage')) {
            $fileName = time(). '_' . $request->file("newTourImage")->getClientOriginalName();
            $request->file("newTourImage")->storeAs("img", $fileName, 'public');
            File::move(public_path('storage/img/' . $fileName), public_path('assets/img/' . $fileName));
            if(File::exists(public_path($tour->photo_url))) {
                File::delete(public_path($tour->photo_url));
            }


            $tour->photo_url = '/assets/img/' . $fileName;
        }

        $tour->tour_code = $request->input("tourCode");
        $tour->country = $request->input("country");
        $tour->tour_focus = $request->input("focus");
        $tour->price = $request->input("price");
        $tour->days_amount = $request->input("daysAmount");
        $tour->supply = $request->input("supply");
        $tour->transport = $request->input("transport");
        $tour->covid_test = $request->input("covidTest") === 'on' ? 1 : 0;
        $tour->tour_insurance = $request->input("touristInsurance") === 'on' ? 1 : 0;
        $tour->tour_type = $request->input("tourType");
        $tour->photo_title = $request->input("photoName");
        $tour->hotel_id = $request->input("hotelId");
        $tour->visa = $request->input("visa");
        $tour->save();
    }

    public function deleteTour($id) {
        $tour = Tour::find($id);
        $tour->delete();
    }
}
