<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //dd(Listing::all());
        //dd(Listing::where('beds', '>=', 4)->orderBy('price', 'asc')->first());
        //dd(Listing:: create(['beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000]));
        return inertia(
            'Index/Index',[
                'message' => 'Hello from Laravel!'
            ]
        
        );
    }
    public function show(){
        return inertia('Index/Show');
    }
}
