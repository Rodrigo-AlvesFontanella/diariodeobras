<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diario;
class DiarioController extends Controller
{   public function __construct(){
        $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $diarios = Diario::all();
        return view('diario\index')->with('diarios',$diarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diario\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diarios = new Diario();
        $diarios->dataobra = $request->get('dataobra');
        $diarios->numero_relatorio = $request->get('numero_relatorio');
        $diarios->numero_contrato = $request->get('numero_contrato');
        $diarios->unidade = $request->get('unidade');
        $diarios->nome_cliente = $request->get('nome_cliente');
        $diarios->clima = $request->get('clima');
        $diarios->local_obra = $request->get('local_obra');
        $diarios->descricao = $request->get('descricao');
 
        $diarios->save();
         
        return redirect('/diarios');
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
        $diario = Diario::find($id);
        return view('diario.edit')->with('diario',$diario);
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
        $diario = Diario::find($id);
        $diario->dataobra= $request->get('dataobra');
        $diario->numero_relatorio = $request->get('numero_relatorio');
        $diario->numero_contrato = $request->get('numero_contrato');
        $diario->unidade = $request->get('unidade');
        $diario->nome_cliente = $request->get('nome_cliente');
        $diario->clima = $request->get('clima');
        $diario->local_obra = $request->get('local_obra');
        $diario->descricao = $request->get('descricao');
        $diario->save();
        
        return redirect('/diarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diario = Diario::find($id);        
        $diario->delete();

        return redirect('/diarios');
    }
}
