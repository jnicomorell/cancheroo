<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function handle(Request $request)
    {
        return response()->json(["message" => "SocialLoginController placeholder"]);
    }
}
