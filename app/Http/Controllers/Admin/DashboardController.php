<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Index
    public function index()
    {
        return "Index del mio blog";
    }

    // Profile
    public function profile()
    {
        return "Profile del mio blog";
    }
}
