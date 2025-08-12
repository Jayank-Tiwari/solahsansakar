<?php

namespace App\Http\Controllers;

use App\Models\Pooja;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured poojas (e.g., top 3 active)
        $featuredPoojas = Pooja::where('is_active', true)->latest()->take(3)->get();
        // TODO: Get testimonials from DB if available
        return view('home', [
            'featuredPoojas' => $featuredPoojas,
        ]);
    }
}
