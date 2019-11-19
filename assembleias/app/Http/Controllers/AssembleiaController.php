<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assembleia;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Municipio;


/**
 * Class AssembleiaController.
 *
 * @author  The scaffold-interface created at 2019-11-08 03:41:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AssembleiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - assembleia';
        $assembleias = Assembleia::paginate(6);
        return view('assembleia.index',compact('assembleias','title'));
    }

    public function modal_distancia()
    {
        $title = 'Selecione cidade';
        
        $municipios = Municipio::all()->pluck('nome','id');
        
        return view('modal.modal_distancia',compact('title','municipios'  ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - assembleia';
        
        $municipios = Municipio::orderBy('uf')
        ->orderBy('nome')
        ->get();        
        return view('assembleia.create',compact('title','municipios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assembleia = new Assembleia();

        
        $assembleia->endereco_reuniao = $request->endereco_reuniao;

        
        
        $assembleia->municipio_id = $request->municipio_id;

        $assembleia->cep = $request->cep;

        
        $assembleia->save();

        // $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        // $pusher->trigger('test-channel',
        //                  'test-event',
        //                 ['message' => 'A new assembleia has been created !!']);

        $municipios = Municipio::orderBy('uf')
        ->orderBy('nome')
        ->get();        
        return view('assembleia.create',compact('title','municipios'));
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - assembleia';

        if($request->ajax())
        {
            return URL::to('assembleia/'.$id);
        }

        $assembleia = Assembleia::findOrfail($id);
        return view('assembleia.show',compact('title','assembleia'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - assembleia';
        if($request->ajax())
        {
            return URL::to('assembleia/'. $id . '/edit');
        }

        
        $municipios = Municipio::all()->pluck('nome','id');

        
        $assembleia = Assembleia::findOrfail($id);
        return view('assembleia.edit',compact('title','assembleia' ,'municipios' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $assembleia = Assembleia::findOrfail($id);
    	
        $assembleia->endereco_reuniao = $request->endereco_reuniao;
        
        
        $assembleia->municipio_id = $request->municipio_id;

        $assembleia->cep = $request->cep;

        
        $assembleia->save();

        return redirect('assembleia');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Gostaria de Excluir?','/assembleia/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$assembleia = Assembleia::findOrfail($id);
     	$assembleia->delete();
        return URL::to('assembleia');
    }
}
