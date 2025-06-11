<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Purchase;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'total_users' => User::count(),
            'total_products' => Product::count(),
            'total_purchases' => Purchase::count()
        ]);
    }
}
