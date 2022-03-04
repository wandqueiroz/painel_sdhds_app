<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{



    public function index()
    {
        //subistituir por conexão no banco
        $indicador = 'Distribuição de Refeições';
        $equipamentos = ['Janaina Dutra'=>135, 'Restaurante Popular'=>784, 'Cuca'=>335, 'Bom Jardim'=>345, 'Messejana'=>134, 'EHC Parangaba'=>218, 'EHP Dom Manuel'=>740, 'EHC Centro'=>807, 'Refeitório Social'=>876];

        return view('pages/dash_all', compact('equipamentos', 'indicador'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "criando card";
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

        //subistituir por conexão no banco
        $indicador = 'Distribuição de Refeições';
        $equipamentos = ['Janaina Dutra'=>135, 'Restaurante Popular'=>784, 'Cuca'=>335, 'Bom Jardim'=>345, 'Messejana'=>134, 'EHC Parangaba'=>218, 'EHP Dom Manuel'=>740, 'EHC Centro'=>807, 'Refeitório Social'=>876];

        return view("pages/dash_show/{id}", compact('equipamentos', 'indicador', 'id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
