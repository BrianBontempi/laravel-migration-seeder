<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Treni in partenza da oggi in poi
        $trains = Train::where('departure_date', '>=', date('Y-m-d'))
            ->orderBy('departure_date')
            ->orderBy('departure_time')
            ->get();

        return view('home', compact('trains'));
    }
}
