<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        // dd($trains);

        // $trains = Train::where('departure_time', '>=', now())->orderBy('departure_time')->get();

        return view('trains.welcome', compact('trains'));
    }
}
