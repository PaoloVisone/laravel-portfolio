<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Auth
    // Index
    public function index()
    {


        $user = Auth::user();
        return Auth::check();
        // return "Index del mio blog";


    }
    // Profile
    public function profile()
    {
        return "Profile del mio blog";
    }
}
