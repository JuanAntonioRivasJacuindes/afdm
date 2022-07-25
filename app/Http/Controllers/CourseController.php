<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
// use Laravel\Cashier\Cashier;
use App\Models\Product;
use Spatie\Permission\Models\Permission;


use App\Models\PermissionNames;

use App\Models\Date;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($id)
    {
        $course = Course::find($id);
        return view('course.preview',compact('course'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'title' => 'required',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
        ];


        $this->validate($request, $rules);
        // $product = Cashier::stripe()->products->create([
        //     'name' => $request->title,
        //     'type' => 'service',
        //     'statement_descriptor' => $request->title,
        //     'active' => true,
        //     'metadata' => [
        //         'description' => $request->description,
        //     ],
        // ]);
        $local_product =  Product::create([
            'name' => $request->title,
            'type' => 2,
            'object' => 'course',
            'stripe_id' => 'no_stripe',
        ]);
        $course =  Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'flyer' => $request->flyer->store('public/course/flyers'),
            'poster' => $request->poster->store('public/course/posters'),
            'stripe_id' => 'no_stripe',
            'status_id' => 2,
            'date_id' =>  Date::create([
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'status_id' => 1,
            ])->id,
            'product_id' => $local_product->id,
        ]);
        $permiso = Permission::create(['name' => 'access_product_' . $course->product_id]);
        PermissionNames::create(['product_id' => $local_product->id, 'permission_name' => $permiso->name, 'permission_id' => $permiso->id]);
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
