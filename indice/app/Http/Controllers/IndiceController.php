<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Indice;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class IndiceController.
 *
 * @author  The scaffold-interface created at 2017-07-15 11:42:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class IndiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI

        $title = 'Index - indice';
        // $indices = Indice::paginate(6);
        // return view('indice.index',compact('indices','title'));


        $indices = Indice::where('pergunta','like','%'.$search.'%')
        ->paginate(50);
        return view('indice.index',compact('indices','title'));
   


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - indice';
        
        return view('indice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indice = new Indice();

        
        $indice->pergunta = $request->pergunta;

        
        $indice->link = $request->link;

        
        $indice->tags = $request->tags;

        
        
        $indice->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new indice has been created !!']);

        return redirect('indice');
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
        $title = 'Show - indice';

        if($request->ajax())
        {
            return URL::to('indice/'.$id);
        }

        $indice = Indice::findOrfail($id);
        return view('indice.show',compact('title','indice'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - indice';
        if($request->ajax())
        {
            return URL::to('indice/'. $id . '/edit');
        }

        
        $indice = Indice::findOrfail($id);
        return view('indice.edit',compact('title','indice'  ));
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
        $indice = Indice::findOrfail($id);
    	
        $indice->pergunta = $request->pergunta;
        
        $indice->link = $request->link;
        
        $indice->tags = $request->tags;
        
        
        $indice->save();

        return redirect('indice');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/indice/'. $id . '/delete');

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
     	$indice = Indice::findOrfail($id);
     	$indice->delete();
        return URL::to('indice');
    }
}
