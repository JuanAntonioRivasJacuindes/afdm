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
    function coordinatorPanel()
    {
    $diplomas = Diploma::all();
     return view('Admin.coordination-panel',compact('diplomas'));
     # code...
    }
}
