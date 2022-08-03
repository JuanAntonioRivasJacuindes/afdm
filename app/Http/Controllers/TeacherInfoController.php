<?php

namespace App\Http\Controllers;

use App\Models\TeacherInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TeacherInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Forms.teacher-info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reg = new TeacherInfo($request->input());
        $reg->terms=$request->file('terms')->store('files/terms');
        $reg->dni=$request->file('dni')->store('files/dni');
        $reg->cedula=$request->file('cedula')->store('files/cedula');
       $reg->save();
       Session::flash('flash_message', 'Gracias por sus respuestas');
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherInfo  $teacherInfo
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherInfo $teacherInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherInfo  $teacherInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherInfo $teacherInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherInfo  $teacherInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherInfo $teacherInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherInfo  $teacherInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherInfo $teacherInfo)
    {
        //
    }
}
