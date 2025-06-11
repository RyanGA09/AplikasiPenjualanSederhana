<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::where('role', 'buyer')->get();
        return view('admin.users.index', compact('users'));
    }

    public function buyers() {
        return view('admin.buyers.index', ['buyers' => User::where('role', 'buyer')->get()]);
    }
}
