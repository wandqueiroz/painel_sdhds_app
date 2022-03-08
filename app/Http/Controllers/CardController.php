<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{



    public function index()
    {
        //subistituir por conexão no banco
        $indicador = 'Distribuição de Refeições';
        $equipamentos = [
            'Janaina Dutra'=>rand(100, 900),
            'Restaurante Popular'=>rand(100, 900),
            'Cuca'=>rand(100, 900),
            'Bom Jardim'=>rand(100, 900),
            'Messejana'=>rand(100, 900),
            'EHC Parangaba'=>rand(100, 900),
            'EHP Dom Manuel'=>rand(100, 900),
            'EHC Centro'=>rand(100, 900),
            'Refeitório Social'=>rand(100, 900)
        ];

        asort($equipamentos);

        return view('pages/dash_all', compact('equipamentos', 'indicador'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages/admin_cosan");
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
        $indicador = 'Distribuição de Refeições';
        $equipamentos = ['Janaina Dutra', 'Restaurante Popular', 'Cuca', 'Bom Jardim', 'Messejana', 'EHC Parangaba', 'EHP Dom Manuel', 'EHC Centro', 'Refeitório Social'];

//        $equipamentos = [
//            'Janaina Dutra'=>[],
//            'Restaurante Popular'=>[],
//            'Cuca'=>[],
//            'Bom Jardim'=>[],
//            'Messejana'=>[],
//            'EHC Parangaba'=>[],
//            'EHP Dom Manuel'=>[],
//            'EHC Centro'=>[],
//            'Refeitório Social'=>[]
//        ];
        if (in_array("$id", $equipamentos)) {
            return view("pages/dash_cosan", compact('equipamentos', 'indicador', 'id'));
        } else {
            return "Sem dados para exibir";
        };

        //subistituir por conexão no banco


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
