<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AtribucoesViaturas;
use App\Models\User;
use App\Models\Viatura;
use Illuminate\Http\Request;

class AtribuicoesControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Response['atribucoesViaturas']=AtribucoesViaturas::with('viaturas')->with('usuarios')->get();

        return view('admin.atribuices_viaturas.list.index',$Response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response['viaturas']=Viatura::get();
        $response['motoristas']=User::where('level','=','Motorista')->get();
    return view('admin.atribuices_viaturas.create.index',$response);
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
            'fk_user' => 'required|numeric|min:1',
            'fk_viaturas' => 'required|numeric|min:1',
            'detalhes' => 'required|',
            ]);


     AtribucoesViaturas::create([
            'fk_user' => $request->fk_user,
            'fk_viaturas'=> $request->fk_viaturas,
            'detalhes'=> $request->detalhes,

        ]);
        return redirect("admin/atribuices-viaturas/index")->with('create', '1');
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
