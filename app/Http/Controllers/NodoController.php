<?php

namespace App\Http\Controllers;

use App\Nodo;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Redirect;

class NodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();

        $empresas = DB::table('companies')->select('*')->get();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 2) {
            //vista para crear un nodo [carpeta/nombre archivo]
            return view('nodo/create_nodo', ['empresas' => $empresas]);
        }else{
            return abort(403, 'Unauthorized action, please contact the administrator for further information or help.');
        }   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        //Validacion
        $request->validate([
            'ip' => ['regex:/^((0\.|[1-9][0-9]?\.|1[0-9]{2}\.|2[0-4][0-9]\.|25[0-5]\.){3}(0|[1-9][0-9]?|1[0-9]{2}|2[0-4][0-9]|25[0-5]))$/i'],
            'serial' => ['regex:/(^[0-9A-Z_\-]+([0-9]$))/i'],
            'NIT' => 'required|alpha_dash|max:20',                          
        ]);
        //
        Nodo::create([
            'nodo_ip' => $request->ip,
            'mac' => $request->serial,
            'NIT' => $request->NIT
        ]);

        //return view('nodo/create_nodo');
        return Redirect::back()->with('alert', 'Un nuevo Nodo ha sido creado con Éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nodo  $nodo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 3) {
            //vista para consultar un nodo [carpeta/nombre archivo]
            $data = Nodo::where('estado', 1)->paginate(10);
            return view('nodo/consulta_nodo', compact('data'));
        }else{
            return abort(403, 'Unauthorized action, please contact the administrator for further information or help.');
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nodo  $nodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nodo $nodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nodo  $nodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nodo $nodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nodo  $nodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nodo $nodo)
    {
        //
    }
}
