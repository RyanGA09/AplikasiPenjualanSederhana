<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminLog;

class AdminLogController extends Controller
{
    public function index()
    {
        $logs = AdminLog::with('admin')->latest()->paginate(10);
        return view('admin.logs.index', compact('logs'));

        // $logs = Log::latest()->paginate(10);
        // return view('admin.logs.index', compact('logs'));
    }
}
