<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movement;
use Illuminate\Http\Request;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movements = Movement::all();
        return response()->json(['listmovements' => $movements], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movement = new Movement();
        $movement->type = $request->type;
        $movement->ammount = $request->ammount;
        $movement->sale_point = $request->sale_point;
        $movement->date_sale = $request->date_sale;
        $movement->product_id = $request->product_id;
        $movement->save();
        return response()->json(['newmovement' => $movement]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movement $movement)
    {
        return response()->json(['movement' => $movement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movement $movement)
    {
        $movement->type = $request->type;
        $movement->ammount = $request->ammount;
        $movement->sale_point = $request->sale_point;
        $movement->date_sale = $request->date_sale;
        $movement->product_id = $request->product_id;
        $movement->save();
        return response()->json(['updatemovement' => $movement]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
