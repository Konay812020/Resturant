<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   $dishes=Dish::all();

     $dishes = Dish::with('categories')->get();

      return view('kitchen.dishes.all',compact('dishes'));

    }
    public function apiindex()
    {
    //   $dishes=Dish::all();

     $dishes = Dish::with('categories')->get();

     return response()->json([
        'message'=>'All Dishes',
        'data'=>$dishes,
    ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {



    }
    public function apishow(Request $id)
    {
        $dish = Dish::with('categories')->findOrFail($id);

        try{
            return response()->json([
                'message' => 'Dish retrieved successfully',
                'dish' => $dish,
            ], 200);
        }catch(ModelNotFoundException ){

            return response()->json([
                'message' => 'Dish not found',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
