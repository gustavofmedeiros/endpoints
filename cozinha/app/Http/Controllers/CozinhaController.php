<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cozinha;

class CozinhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {





$cozinhas = Cozinha::all();
        return response()->json($cozinhas);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create() {
        return view('cozinhas.create');




}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$cozinha = new Cozinha();
$cozinha->fill($request->all());
$cozinha->save();

return response()->json($cozinha, 201);


}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$cozinha = Cozinha::find($id);

        if(!$cozinha) {
            return response()->json([
                'message'   => 'Dados nao encontrados para cozinhas',
            ], 404);
        }

        return response()->json($cozinha);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
$cozinha = Cozinha::find($id);

        if(!$cozinha) {
            return response()->json([
                'message'   => 'Nenhum registro encontrado',
            ], 404);
        }

$cozinha->fill($request->all());
$cozinha->save();

        return response()->json($cozinha);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id) {
$cozinha = Cozinha::find($id);

if(!$cozinha) {
return response()->json([
'message'   => 'cozinha nao encontrada'
], 404);
}

$cozinha->delete();


    }


}
