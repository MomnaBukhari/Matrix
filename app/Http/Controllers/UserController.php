<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
                                        // Methods for API responses
    public function apiWelcomepage()
    {
        return response()->json([
            'message' => 'Hi, Welcome!',
            'status' => 200
        ]);
    }

    public function apiDashboardpage()
    {
        return response()->json([
            'message' => 'This is the API dashboard.',
            'status' => 200
        ]);
    }

                                        // Methods for web views
    public function welcomePage()
    {
        return view('welcome');
    }

    public function dashboardPage()
    {
        return view('dashboard');
    }
}
