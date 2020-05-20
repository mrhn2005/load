<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\LoadChart;

class ChartController extends Controller
{
    public function index()
    {
        $chart = new LoadChart();

        $chart->labels(['One', 'Two', 'Three']);

        $chart->dataset('sample chart', 'line', [1, 2, 3]);

        return view('charts.index', compact('chart'));
    }
}
