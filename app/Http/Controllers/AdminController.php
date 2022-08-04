<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diploma;
use App\Models\TeacherInfo;

class AdminController extends Controller
{
    public function adminPanel()
    {
        $teachers = TeacherInfo::all();
        return view('Admin.admin-panel',compact('teachers'));
    }
    function coordinatorPanel()
    {
    $diplomas = Diploma::all();
     return view('Admin.coordination-panel',compact('diplomas'));
     # code...
    }
}
