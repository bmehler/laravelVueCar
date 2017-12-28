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
        $cars = Car::all();
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
        $car = new Car([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'price' => $request->get('price')
        ]);
        $car->save();
        return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->brand = $request->get('brand');
        $car->model = $request->get('model');
        $car->price = $request->get('price');
        $car->save();

        return response()->json('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return response()->json('Successfully Deleted');
    }
}
