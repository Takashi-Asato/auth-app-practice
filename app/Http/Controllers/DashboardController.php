<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard', [
            'user' => $request->user(),
        ]);
    }
    public function logout(Request $request)
    {
        return view('auth.login', [
            'user' => $request->user(),
        ]);
    }
}
