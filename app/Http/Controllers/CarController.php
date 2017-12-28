<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car:all();
        return response()->json($cars);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return Illuminate\Http\Response 
     * 
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new Car([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'price' => $request->get('price')
        ]);
        $cars->save();
        return response()->json('Successfully added');
    }
}
