<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{

    //index -> primeiro acesso ao controller -> listagem dos dados
    //create -> redireciona para a tela de criação -> retornar a view de cadastro
    //store -> salvar os dados
    //edit -> Redireciona para a tela de cadastro
    //update -> atualizar os dados
    //destroy -> deletar os dados
    //show -> visualizar os dados sem poder editar

    /**
     * @var \App\Models\Area
    */
    protected $area;

    public function __construct(Area $area)
    {
        $this->area = $area;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($areas); // para printar a variavel na tela
        $areas = $this->area->paginate(5);
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
       // $area = new Area();
       // $area->fill($request->all());
       // $area->save();

       $this->area->fill($request->all());
       $this->area->save();
        
        return redirect()->route('areas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // resources/views/areas/edit.blade.php
        $area = $this->area->findOrFail($id);
        return view('areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AreaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $id)
    {
        $area = $this->area->findOrFail($id);
        $area->fill($request->all());
        $area->save();

        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = $this->area->findOrFail($id);
        $area->delete();

        return redirect()->route('areas.index');
    }
}
