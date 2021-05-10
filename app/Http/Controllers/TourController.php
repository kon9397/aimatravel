<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Tour;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index() {
        $tour = Tour::with('hotel')->get();
        return view('index', ['tours' => $tour]);
    }

    public function show() {
        $tours = Tour::all();
        return view('tours.show', ['tours'=> $tours]);
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
        $tour->tour_date = $request->input('tourDate');
        $tour->visa = $request->input("visa");
        $tour->save();

        return redirect('/admin/tours');
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

    public function searchTour(Request $request) {
        $tours = Tour::with('hotel')->get();
        $results = [];

        if(isset($request->tourName)) {
            $tours = $tours->where('country', $request->tourName)->values();
        }

        if(isset($request->dateFrom)) {
            $tours = $tours->where('tour_date', $request->dateFrom)->values();
        }

        if(isset($request->daysAmount)) {
            $tours = $tours->where('days_amount', $request->daysAmount)->values();
        }

        if(isset($request->guideTour)) {
            $results[] = $tours->where('tour_type', "Экскурсионные туры")->values();
        }

        if(isset($request->earlyBooked)) {
            $results[] = $tours->where('tour_type', "Раннее бронирование")->values();
        }

        if(isset($request->touristInsurance)) {
            $results[] = $tours->where('tour_insurance', 1)->values();
        }
        if(isset($request->holidaysTour)) {
            $results[] = $tours->where('tour_type', "Туры на праздники")->values();
        }
        if(isset($request->packTour)) {
            $results[] = $tours->where('tour_type', "Пакетные туры")->values();
        }
        if(isset($request->corpTours)) {
            $results[] = $tours->where('tour_type', "Корпоративные туры")->values();
        }
        if(isset($request->covidTests)) {
            $results[] = $tours->where('covid_test', 1)->values();
        }

        $preparedResult = [];

        foreach ($results as $result) {
            foreach ($result as $data) {
                $preparedResult[] = $data;
            }
        }
        $result = array_unique($preparedResult);
        if(empty($preparedResult)) {
            return json_encode($tours, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        }
        return json_encode($result, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}
