<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageGalleryController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $response['gallery'] = Gallery::with(['images'])->find($id);
        return view('admin.imageGallery.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            ImageGallery::create([
                'path' => $file->store("galleryImages/$id"),
                'fk_idGallery' => $id
            ]);
        }
        return redirect("admin/gallery/show/$id")->with('create_image', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageGallery  $ImageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ImageGallery::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
