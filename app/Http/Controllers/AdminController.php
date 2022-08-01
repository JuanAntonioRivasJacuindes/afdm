<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diploma;
class AdminController extends Controller
{
    public function adminPanel()
    {
        return view('Admin.admin-panel');
    }
    public function adminPanel2()
    {
        return view('Admin.admin-2');
    }
    function coordinatorPanel()
    {
    $diplomas = Diploma::all();
     return view('Admin.coordination-panel',compact('diplomas'));
     # code...
    }
}
