<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

/**
 * @group Restaurants
 *
 * APIs for get users
 */
class RestaurantController extends Controller
{

    public function list(){
        $data = array(
            'restaurants'   =>  Restaurant::with(['contact', 'address', 'ratings'])->get()
        );
        return view('restaurant.index')->with($data);
    }
    /**
     * Get Restaurants
     * 
     * Retrieve all restaurants
     *
     * @return 
     */
    public function index()
    {
        $response = Restaurant::with(['contact', 'address', 'ratings'])->simplePaginate(5);

        return response()->json($response, 200);
    }

    /**
     * Get Restaurant
     * 
     * Retrieve a restaurant by id
     * @queryParam id reqyured The id of the restaurant to get Example: 15
     * @return void
     */
    public function show($id)
    {
        $response = Restaurant::with(['contact', 'address', 'ratings'])->find($id);

        return response()->json($response, 200);
    }
}
