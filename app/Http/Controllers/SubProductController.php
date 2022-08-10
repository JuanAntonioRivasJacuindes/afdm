<?php

namespace App\Http\Controllers;

use App\Models\SubProduct;
use Illuminate\Http\Request;

class SubProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubProduct::create($request->input());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subproduct= SubProduct::findOrFail($id);
        return view('livewire.subproduct.show',compact('subproduct'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SubProduct $subProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubProduct $subProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($subProduct)
    {
        SubProduct::find($subProduct)->delete();
        return redirect()->back();
    }
}
