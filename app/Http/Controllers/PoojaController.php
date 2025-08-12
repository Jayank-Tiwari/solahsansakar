<?php

namespace App\Http\Controllers;

use App\Models\Pooja;
use Illuminate\Http\Request;

class PoojaController extends Controller
{
    public function index()
    {
        $poojas = Pooja::where('is_active', true)->latest()->get();

        return view('poojas.index', [
            'poojas' => $poojas,
        ]);
    }
}