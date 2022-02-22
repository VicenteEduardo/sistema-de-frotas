<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GastosCombustivel;
use App\Models\User;
use App\Models\Viatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GastosCombustivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Response['gastosCombustivel']=GastosCombustivel::with('viaturas')->with('usuarios')->get();

        return view('admin.gastoCombutivel.list.index',$Response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['viaturas']=Viatura::get();
    return view('admin.gastoCombutivel.create.index',$response);
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

            'fk_viaturas' => 'required|numeric|min:1',
            'gastos' => 'required|numeric|',
            ]);


    GastosCombustivel::create([
            'fk_user' => Auth::user()->id,
            'fk_viaturas'=> $request->fk_viaturas,
            'gastos'=> $request->gastos,

        ]);
        return redirect("admin/gastos-combustivel/index")->with('create', '1');
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
        //
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
    }
}
