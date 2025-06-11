<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function index()
    {
        $salesData = Transaction::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(total_amount) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $labels = $salesData->pluck('date');
        $totals = $salesData->pluck('total');

        return view('admin.statistics.index', compact('labels', 'totals'));
    }
}

