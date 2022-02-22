<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AtribucoesViaturas;
use App\Models\Solicacoes;
use App\Models\Viatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->level=="Administrador"){
        $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->get();
        }
        else{
            $response['solicacoes'] = Solicacoes::with('viaturas', 'usuarios')->where('fk_user',Auth::user()->id)->get();
        }
        return view('admin.solicitacoes.listaSolitacoes.index', $response);
    }

    public function cadastrar(Request $request)
    {
        $request->validate([

            'latitude' => 'required|numeric|min:2',
            'longitude' => 'required|numeric|min:2',
            'valorPagar' => 'required|numeric|min:2',
            'informacaoCarga' => 'required|',
            'EntregaData' => 'required|',
            'anexo' => 'required|mimes:jpg,png,gif,SVG,EPS,pdf,doxc',

        ]);
        $file = $request->file('anexo')->store('solicacoes');


        Solicacoes::create([
            'fk_user' => Auth::user()->id,
            'fk_viaturas' => $request->fk_viaturas,
            'anexo' => $file,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'valorPagar' => $request->valorPagar,
            'status' => 'Pendente',
            'informacaoCarga' => $request->informacaoCarga,
            'Entrega' => $request->EntregaData,
            'quantidadeCarga' => $request->quantidadeCarga,


        ]);
        return redirect("admin/solicitacoes-viaturas/index")->with('create', '1');
    }
    public function create()
    {
        return view('admin.solicitacoes.create.index');
    }

    public function solicitar($id)
    {
        $response['viatura'] = Viatura::find($id);
        return view('admin.solicitacoes.buscar.index', $response);
    }
    public function buscar(Request $request)
    {
        $kg = $request->quantidade_KG;
        $viaturas_desponivel = Viatura::where('quantidade', $kg)->count();
        if ($viaturas_desponivel <= 0) {

            return redirect("admin/solicitacoes-viaturas/create")->with('indesponivelS', '1');
        } else {
            $response['viaturas_desponivel'] = Viatura::get();
            return view('admin.solicitacoes.list.index', $response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['viatura'] = Viatura::find($id);

        return view('admin.solicitacoes.show.index', $response);
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
