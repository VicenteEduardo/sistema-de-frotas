<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Video;
use App\Models\User;
use App\Models\Viatura;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['motorista']=User::where('level','=','Motorista')->count();
        $response['viatura']=Viatura::count();

        return view('admin.home.index',$response);
    }
}
