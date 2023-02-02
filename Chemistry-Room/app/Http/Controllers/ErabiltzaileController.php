<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Erabiltzaileak;
use App\Models\Argazkiak;

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
            if($request->pasahitza == $usu->pasahitza){
                session(['erab' => $usu]);
                return view('web.orriNagusi');
            }   
        }

        $error = '';
        return view('web.login', compact('error'));

    }

    public function logout(Request $request)
    {
        // 
        //Invalida la sesion
        $request->session()->invalidate();
        //La carga de nuevo y regenera token
        $request->session()->regenerateToken();

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
    
    
            $erab ->pasahitza = $request->pasahitza;
            $erab ->rol = 'ikasle';
            $erab->save();
        }
        return redirect()->action([ErabiltzaileController::class, 'index']);
    }

    public function argazki(Request $request)
    {
        //
        

        $argazkiDatu = new Argazkiak();

        if($request->hasFile('argazki') ){
            $archivo = $request->file('argazki');
            $ruta = 'multimedia/';
            $nombreArchivo = time() . '-' . $archivo->getClientOriginalName();
            $subida = $request->file('argazki')->move($ruta, $nombreArchivo);
            $argazkiDatu->argazkia = $nombreArchivo;
        }


        $argazkiDatu->Izena = $request->izena;
        $argazkiDatu->save();

        $erab = Erabiltzaileak::orderby('id', 'desc')->paginate(16);

        return view('adminKarpeta.admin', compact("erab"));
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

        if($request->pasahitza != ''){
            if($request->pasahitza == $request->pasahitzab){
                $erab = Erabiltzaileak::findOrFail($id);
                        $erab ->izena = $request->izena;
                        $erab ->abizenak = $request->abizenak;
                        $erab ->mail = $request->mail;
                        $erab ->pasahitza = $request->pasahitza;
                        $erab->save();
    
                        session(['erab' => $erab]);

                        return view('web.profila');
            }
        }else{
            $erab = Erabiltzaileak::findOrFail($id);
            $erab ->izena = $request->izena;
            $erab ->abizenak = $request->abizenak;
            $erab ->mail = $request->mail;
            $erab->save();

            session(['erab' => $erab]);

            return view('web.profila');
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
