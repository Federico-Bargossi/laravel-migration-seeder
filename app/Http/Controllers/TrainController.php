<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today(); // Data odierna
        $trains = Train::where('departure_time', '>=', $today)
                        ->where('is_deleted', false)
                        ->orderBy('departure_time')
                        ->get();

        return view('trains.index', compact('trains'));
    }
}
