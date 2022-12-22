<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Erabiltzaileak;

class ErabiltzaileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        //
        $usuarios = Erabiltzaileak::where('mail','=',$request->mail)->get();
        foreach($usuarios as $usu){
            if($request->pasahitza != $usu->pasahitza){
                return view('Comercio.log-reg', 'El usuario es incorrecto');
            }   
        }

        session(['erab' => $usu]);
        return view('web.orriNagusi');

    }

    public function adminmode()
    {
        //
        $erab = Erabiltzaileak::orderby('id', 'desc')->paginate(16);
        // $alumnos = Alumno::all();
        return view('adminKarpeta.admin', compact("erab"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
      
        if($request->pasahitza == $request->pasahitzab){

            $request->validate([

                'izena' => 'required|max:75',
    
                'abizena' => 'required|max:50',
    
                'mail' => 'required||min:10|max:50',
    
                'pasahitza' => 'required||min:8|max:20',
    
            ]);
            
            //
            $erab = new Erabiltzaileak();
            $erab ->izena = $request->izena;
            $erab ->abizenak = $request->abizena;
            $erab ->mail = $request->mail;
    
    
            $erab ->pasahitza = $request->pasahitza;
            $erab ->rol = 'default';
            $erab->save();
        }
        return view('web.login');
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
        //
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


