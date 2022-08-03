<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function registerTeacherInfo()
   {
    return view('Forms.teacher-info');
   }
}
