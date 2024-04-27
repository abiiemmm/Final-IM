<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
    public function info () {
        return view ('dashboard/information');
    }
    public function users () {
        return view ('dashboard/users');
    }
    public function dashboard () {
        return view ('dashboard');
    }
    public function aboutus () {
        return view ('dashboard/aboutus');
    }
    public function doctor () {
        return view ('dashboard/doctorlist');
    }
}
