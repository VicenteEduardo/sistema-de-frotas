<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $response['galleries'] = Gallery::orderBy('id', 'desc')->get();
        return view('admin.gallery.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'required|min:1',
        ]);


        $file = $request->file('image')->store('Gallery');
        $gallery = Gallery::create([
            'cover' => $file,
            'name' => $request->name
        ]);
        return redirect("admin/gallery/show/$gallery->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['gallery'] = Gallery::find($id);
        return view('admin.gallery.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['gallery'] = Gallery::find($id);
        return view('admin.gallery.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required|min:5|max:255',
            'image' => 'required|min:1',
        ]);
        if ($request->file('image')) {

            $file = $request->file('image')->store('Gallery');
            Gallery::find($id)->update([
                'cover' => $file,
                'name' => $request->name
            ]);
        } else {

            Gallery::find($id)->update([
                'name' => $request->name
            ]);
        }
        return redirect()->route('admin.gallery.index')->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Gallery::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
