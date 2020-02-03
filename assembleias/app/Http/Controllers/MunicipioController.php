<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Municipio;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class MunicipioController.
 *
 * @author  The scaffold-interface created at 2019-11-08 02:14:08am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - municipio';
        $municipios = Municipio::paginate(6);
        return view('municipio.index',compact('municipios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - municipio';
        
        return view('municipio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipio = new Municipio();

        
        $municipio->codigo = $request->codigo;

        
        $municipio->nome = $request->nome;

        
        $municipio->uf = $request->uf;

        
        
        $municipio->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new municipio has been created !!']);

        return redirect('municipio');
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
        $title = 'Show - municipio';

        if($request->ajax())
        {
            return URL::to('municipio/'.$id);
        }

        $municipio = Municipio::findOrfail($id);
        return view('municipio.show',compact('title','municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - municipio';
        if($request->ajax())
        {
            return URL::to('municipio/'. $id . '/edit');
        }

        
        $municipio = Municipio::findOrfail($id);
        return view('municipio.edit',compact('title','municipio'  ));
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
        $municipio = Municipio::findOrfail($id);
    	
        $municipio->codigo = $request->codigo;
        
        $municipio->nome = $request->nome;
        
        $municipio->uf = $request->uf;
        
        
        $municipio->save();

        return redirect('municipio');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/municipio/'. $id . '/delete');

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
     	$municipio = Municipio::findOrfail($id);
     	$municipio->delete();
        return URL::to('municipio');
    }
}
