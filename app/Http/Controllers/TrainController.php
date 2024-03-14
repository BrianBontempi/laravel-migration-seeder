<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{

    public function __invoke() {
        $trains = Train::all();
        return view('train', compact('trains'));
    }
}