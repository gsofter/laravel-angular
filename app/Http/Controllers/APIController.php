<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cars;
class APIController extends Controller
{
    public function getCarsList()
    {
    	$cars = Cars::all();
    	return $cars;
    }
    
    public function getCarsListForHomePage()
    {
    	// dd($page);
    	// $cars = Cars::limit(10)->offset(10)->get();
    	$cars = Cars::take(10)->get();

    	return $cars;
    }

    public function getCarsListPerPage()
    {
        // echo "asdf";
        return Cars::paginate(10)->items();
    }
}
