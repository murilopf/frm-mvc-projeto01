<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Area;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Study $study, Area $areaParam)
    {
        $this->middleware('auth');
        $this->study = $study;
        $this->area = $areaParam;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$areas = $this->area->all();
        $atraso = $this->study->estudoEmAtraso();
        $andamento = $this->study->estudoEmAndamento();
        $finalizado = $this->study->estudoEmFinalizado();

        return view('home', compact('atraso', 'andamento', 'finalizado'));
    }
}
