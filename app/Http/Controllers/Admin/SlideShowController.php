<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlideShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlideShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $response['slideshows'] = SlideShow::get();
        return view('admin.slideshow.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slideshow.create.index');
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

            'alt' => 'required|min:5|max:100',
            'image' => 'required|min:2',
        ]);

        $file = $request->file('image')->store('slideshow');
        $id_slide = SlideShow::create([
            'path' => $file,
            'alt' => $request->alt,
            'state' => 'on'
        ]);
        return redirect("admin/slideshow/show/$id_slide->id")->with('create', '1');
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
        $response['slideshow'] = SlideShow::find($id);
        return view('admin.slideshow.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['slideshow'] = SlideShow::find($id);
        return view('admin.slideshow.edit.index', $response);
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

            'alt' => 'required|min:5|max:100',
            'state' => 'required',
        ]);

        if( $request->file('image')){

            $file = $request->file('image')->store('slideshow');
            $id_slide = SlideShow::find($id)->update([
                'path' => $file,
                'alt' => $request->alt,
                'state' => $request->state
            ]);
        }else{

            $id_slide = SlideShow::find($id)->update([

                'alt' => $request->alt,
                'state' => $request->state
            ]);
        }


        return redirect()->route('admin.slideshow.index')->with('edit', '1');
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
        SlideShow::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
