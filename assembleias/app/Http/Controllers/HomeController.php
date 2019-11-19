<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assembleia;
use App\Municipio;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title = 'Index - assembleia';

        // $assembleias = Assembleia::paginate(6);
        // return view('home',compact('assembleias','title'));

        $title = 'Assembleias';
        $municipios = Municipio::orderBy('uf')
        ->orderBy('nome')
        ->get();
        
        $assembleias = Assembleia::paginate(200);
        return view('home',compact('title','assembleias','municipios'));
    }
}
