<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cars;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Cars::all();
        return view('home')->with('cars', $cars);
    }

    public function showCarDetail($id){
        $car = Cars::find($id);
        return  view('detail')->with('car', $car);
    }

    public function searchCar(){
        echo "asdf";
        return;
    }

    public function addCar(){
        return view('add_car');
    }

    public function addNewCar(Request $request){
    
        $car = new Cars;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->manufacturer = $request->manufacturer;
        $car->motor = $request->motor;
        $car->price_gross = $request->price_gross;
        
        $car->save();

        $cars = Cars::all();
        return view('search')->with('cars');
        //return view('add_new_car');
    }
}
