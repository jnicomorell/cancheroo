<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function handle(Request $request)
    {
        return response()->json(["message" => "TournamentController placeholder"]);
    }
}
