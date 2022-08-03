<?php

namespace App\Http\Controllers;
// use Laravel\Cashier\Cashier;
use App\Models\Diploma;
use App\Models\Product;
use App\Models\Date;
use App\Models\ZoomLink;
use Carbon\Carbon;
use App\Models\PermissionNames;
use Spatie\Permission\Models\Permission;
use App\Models\Revoe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class DiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inscription(Request $request)
    {
      $diploma = Diploma::find($request->diploma_id);

        return view('diploma.inscription',compact('diploma'));
        # code...
    }

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
        return view('diploma.create');
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
        $local_product =  Product::create([
            'name' => $request->title,
            'type' => 1,
            'object' => 'diploma',
            'stripe_id' => 'no_stripe',
        ]);




        //     $product = Cashier::stripe()->products->create([
        //     'name' => $request->title,
        //     'type' => 'service',
        //     'statement_descriptor' => 'Diplomado Laravel API',
        //     'active' => true,
        //     'metadata' => [
        //         'description' => 'Descripcion Largaasdasdasdardasdgsdgfadsfga',
        //     ],
        // ]);
        // Creacion del Thumbnail
        $originalFlyer=$request->flyer->store('public/course/flyers');

        ImageController::createThumbnail($originalFlyer,300,300);
        //Creacion del registro
        $diploma =  Diploma::create([
            'title' => $request->title,
            'description' => $request->description,
            'flyer' => $originalFlyer,
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
        Revoe::create([
            'key' => $request->revoe,
            'register_date' => $request->register_date,
            'diploma_id' => $diploma->id,
        ]);
        // $permiso = Permission::create(['name' => 'access_product_' . $diploma->product_id]);
        // PermissionNames::create(['product_id' => $local_product->id, 'permission_name' => $permiso->name, 'permission_id' => $permiso->id]);
        // return response()->json($diploma, 201);
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */

    public function updateFlyer(Request $request)
    {

        $diploma = Diploma::find($request->diploma_id);
        if (Storage::exists($diploma->flyer)) {
            Storage::delete($diploma->flyer);
        }
        if (Storage::exists($diploma->flyer_thumbnail())) {
            Storage::delete($diploma->flyer_thumbnail());
        }
        $newFlyer = $request->flyer->store('public/course/flyers');
        ImageController::createThumbnail($newFlyer,300,300);
        $diploma->update([
            'flyer' => $newFlyer,
        ]);
        return back();
    }
    public function updatePoster(Request $request)
    {
        $diploma = Diploma::find($request->diploma_id);
        if (Storage::exists($diploma->poster)) {
            Storage::delete($diploma->poster);
        }
        $diploma->update([
            'poster' => $request->poster->store('public/course/posters'),
        ]);
        return back();
    }
    public function show(Request $request)
    {

        $diploma= Diploma::where('product_id',$request->product_id)->first();

        return view('diploma.show', compact('diploma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function updateZoomLink(Request $request , ZoomLink $zoomLink)
    {
        $zoomLink = ZoomLink::findorFail($request->zoomLinkId);

       $zoomLink->update([
        'link'=>$request->link,
       ]);
        return back();
    }
    public function edit(Request $request)
    {
        $diploma = Diploma::find($request->id);
        $zoomLink = $diploma->zoomLink;
        if(!$diploma->zoomLink){

            $zoomLink = ZoomLink::create([
                'link'=>'',
                'diploma_id'=>$diploma->id,
                'status_id'=>'1',
                'expires_at'=>Carbon::now(),
            ]);
        }
        return view('diploma.edit', compact('diploma','zoomLink'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_diploma)
    {
        $diploma = Diploma::find($id_diploma);
        $diploma->update($request->all());
        $diploma->save();
        return response()->json($diploma, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_diploma)
    {
        $diploma = Diploma::find($id_diploma);
        $diploma->delete();
        $diploma->save();
        return response()->json(null, 204);
    }

    public function preview($id)
    {
        $diploma = Diploma::findOrFail($id);
        return view('diploma.preview', compact('diploma'));
    }
}
