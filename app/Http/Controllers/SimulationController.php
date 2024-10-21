<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationController extends Controller
{
    public function simulation(Request $request)
    {
        return response()->json([
            'total' => 0,
            'parcel' => 0,
            'fees' => 0,
        ]);
    }
}
