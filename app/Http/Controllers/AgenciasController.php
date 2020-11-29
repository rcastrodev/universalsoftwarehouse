<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Casos;

class AgenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agencia.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = $id;
        $agencia = Casos::where('CodigoAgencia', $id)->first();
        return view('agencia.show', compact('id', 'agencia'));
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

    public function getListAgency($id){
        $query = Casos::where('CodigoAgencia', $id)->where('Modulo', 'AGENCIAS');
        return Datatables::of($query)
            ->editColumn('Numero_Caso', function($CasoUniversalWeb){
                return "<a href='/admin/agencia/detalle/".$CasoUniversalWeb->Numero_Caso."'>$CasoUniversalWeb->Numero_Caso</a>";
            })
            ->rawColumns(['Numero_Caso'])
            ->make(true);   
    }

    public function caseNumber($caseNumber){
        $items = Casos::where('Numero_Caso', $caseNumber)->first();
        return view('agencia.details', compact('items'));
    }
}

