<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cars;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function addNewCar(Request $request){
    
	    $user = auth()->user();

        $car = new Cars;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->manufacturer = $request->manufacturer;
        $car->motor = $request->motor;
        $car->price_gross = $request->price_gross;
        $car->seller_name = $user->firstname;
        $car->seller_street = "";
        $car->seller_zipcode = "";
        $car->seller_city = $user->address;
        $car->seller_address = $user->address;
        $car->seller_region = "";
        $car->seller_country = "";
        $car->seler_geolocation = "";
        $car->seller_phone1 = $user->phonenumber;
        $car->save();

        return redirect()->route('search_car');

        //return view('add_new_car');
    }

    public function searchAllCar(){
        $cars = Cars::all();
        return view('search')->with('cars', $cars);
    }


    public function searchsCarByFilter(Request $request){
        // echo ("asdf");
        $types = $request->vehicle_type;
        $array = explode(" ", $types);
        //dd($array[0] . $array[1]);
        $carsQuery = Cars::type("NONE");

        foreach ($array as $key => $type) {
            $carsQuery = $carsQuery->orWhere->type($type);
        }

        $cars = $carsQuery->get();
        // dd($cars);
        return view('search')->with('cars', $cars);
        // dd($array[0]);
    }
    
}