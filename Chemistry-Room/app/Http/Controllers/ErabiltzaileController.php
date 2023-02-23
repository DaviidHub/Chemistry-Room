<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Erabiltzaileak;
use App\Models\Argazkiak;
use Illuminate\Support\Facades\Hash;


class ErabiltzaileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){

        $lola = Argazkiak::where('izena','=', 'lola')->get()[0];
        return view('web.login', compact('lola'));
     }

    public function login(Request $request)
    {
        //
        $request->validate([
            'mail' => 'required|max:35',
            'pasahitza' => 'required|min:8|string',
        ]);

        $usuarios = Erabiltzaileak::where('mail','=',$request->mail)->get();
        foreach($usuarios as $usu){
            if(Hash::check($request->pasahitza, $usu->pasahitza)){
                session(['erab' => $usu]);
                session(['sFoto' => $usu->argazkia]);
                session(['idioma' => "es"]);
                return view('web.orriNagusi');
            }   
        }

        $error = '';
        return redirect()->action([ErabiltzaileController::class, 'index']);

    }

    public function logout(Request $request)
    {
        // 
        //Invalida la sesion
        $request->session()->invalidate();
        //La carga de nuevo y regenera token
        $request->session()->regenerateToken();
        // Borrar sesion 
        $request->session()->flush();

        return redirect()->action([ErabiltzaileController::class, 'index']);
    }

    public function adminmode()
    {
        //
        $erab = Erabiltzaileak::orderby('id', 'desc')->paginate(16);
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
            $erab -> argazkia = 'multimedia/perfilArgazkiak/predeterminada.webp';
            $erab ->pasahitza = bcrypt($request->pasahitza);
            $erab ->rol = 'jokalaria';
            $erab->save();
        }
        return redirect()->action([ErabiltzaileController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function idioma()
    {
            if(session()->get('idioma') == "es"){
                 session(['idioma' => "eu"]);
            }
            else{
                 session(['idioma' => "es"]);
            }
            return redirect()->route('web.profila');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $erab = Erabiltzaileak::findOrFail($id);
        return view('web.edit', ['erab' => $erab]);
    }

    public function adminUpdate(Request $request, $id) 
    {
        $erab = Erabiltzaileak::findOrFail($id);
        $erab ->izena = $request->izena;
        $erab ->abizenak = $request->abizenak;
        $erab ->mail = $request->mail;
        $erab ->rol = $request->rol;
        if ($request->pasahitza != '') {
            $erab ->pasahitza = bcrypt($request->pasahitza);
        }

        if($request->hasFile('argazkia') ) {
            if (file_exists($erab->argazkia) || $erab->argazika != 'multimedia/perfilArgazkiak/predeterminada.webp') {
                unlink($erab->argazkia);
            }
            $archivo = $request->file('argazkia');
            $ruta = 'multimedia/perfilArgazkiak/';
            $nombreArchivo = session()->get('erab')->mail. '-' . $archivo->getClientOriginalName();
            $subida = $request->file('argazkia')->move($ruta, $nombreArchivo);
            $erab->argazkia = $ruta.$nombreArchivo;
            $erab->save();
        } elseif (!($request->hasFile('argazkia'))) {
            $img = $erab->argazkia;
            $erab->argazkia = $img;
            $erab->save();
        } else
        $erab->save();


        return redirect()->route('adminKarpeta.admin');
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

        $erab = Erabiltzaileak::findOrFail($id);

        if($request->pasahitza != ''){
            if($request->pasahitza == $request->pasahitzab){

                if($request->hasFile('argazkia') ){

                    if (file_exists($erab->argazkia) || $erab->argazika != 'multimedia/perfilArgazkiak/predeterminada.webp') {
                        unlink($erab->argazkia);
                    }

                    $archivo = $request->file('argazkia');
                    
                    $nombreArchivo = session()->get('erab')->mail . '-' . $archivo->getClientOriginalName();
                    $subida = $request->file('argazkia')->move($ruta, $nombreArchivo);
                    $erab->argazkia = $ruta.$nombreArchivo;
                }
                        $erab ->izena = $request->izena;
                        $erab ->abizenak = $request->abizenak;
                        $erab ->mail = $request->mail;
                        $erab ->pasahitza = bcrypt($request->pasahitza);
                        $erab->save();

                        $request->session()->flush();
            
                        session(['erab' => $erab]);
                        session(['sFoto' => $erab->argazkia]);

                        return redirect()->route('web.profila');
                    }

        }else{

            if($request->hasFile('argazkia') ){

                if (file_exists($erab->argazkia) || $erab->argazika != 'multimedia/perfilArgazkiak/predeterminada.webp') {
                    unlink($erab->argazkia);
                }
                
                $archivo = $request->file('argazkia');
                $ruta = 'multimedia/perfilArgazkiak/';
                $nombreArchivo = session()->get('erab')->mail . '-' . $archivo->getClientOriginalName();
                $subida = $request->file('argazkia')->move($ruta, $nombreArchivo);
                $erab->argazkia = $ruta . $nombreArchivo;
            }

            $erab ->izena = $request->izena;
            $erab ->abizenak = $request->abizenak;
            $erab ->mail = $request->mail;
            $erab->save();

            $request->session()->flush();
            
            session(['erab' => $erab]);
            session(['sFoto' => $erab->argazkia]);

            return redirect()->route('web.profila');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Erabiltzaileak::findOrFail($id);
        $user->delete();
        return redirect()->route('adminKarpeta.admin')->with('success', 'Erabiltzailea ezabatuta');
    }

}
