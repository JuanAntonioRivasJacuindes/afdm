<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPanel()
    {
        return view('Admin.admin-panel');
    }
    function coordinatorPanel()
    {
     return view('Admin.coordination-panel');
     # code...
    }
}
