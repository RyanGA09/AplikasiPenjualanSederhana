<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('buyer')->latest()->paginate(10);
        return view('admin.transactions.index', compact('transactions'));
    }

    public function updateStatus(Request $request, Transaction $transaction)
    {
        $request->validate(['status' => 'required|string']);
        $transaction->update(['status' => $request->status]);
        return back()->with('success', 'Status updated.');
    }
}
