<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function handle(Request $request)
    {
        return response()->json(["message" => "RentalController placeholder"]);
    }
}
